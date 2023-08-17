<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\WithdrawController;
use App\Models\About;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [UserController::class , 'welcome'])->name('home');
Route::post('/register', [UserController::class, 'Register'])->name('register');
Route::get('/login', [UserController::class, 'LoginPage'])->name('Login');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/howto', function () {return view('howto');})->name('howto');
Route::get('/logout', function () {Auth::logout();return redirect('/');});
Route::get('/contact', [UserController::class , 'contact'])->name('contact');

Route::get('/json', function () {
    $client = new Client();
    $response = $client->get('http://www.thaigold.info/RealTimeDataV2/gtdata_.txt');
    $json = $response->getBody();
    $data = json_decode($json);
    return response()->json($data);
})->name('json');
Route::get('/user_data', function () {
    $data_user = User::select('id', 'name', 'balance_credit', 'balance_token')->where('id', Auth::id())->first();
    $about = About::select('credit_per_token','token_per_gold')->first();
    $result = [
        'data_user' => $data_user,
        'about' => $about
    ];
    return response()->json($result);
    // dd($data_user);
    // return response()->json($data_user,$about);
});

Route::get('/dashboard', function () {
            if (Auth::check()) {
                if (Auth::user()->type == 1) {
                    return redirect()->route('AdminDashboard');
                } else {
                    return redirect()->route('home');
                }
            } else {
                return view('auth.login');
            }
        })->name('dashboard');
Route::group(['prefix' => 'user'], function () {
    // Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () { });
    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/list', [UserController::class , 'mylist'])->name('list');
        Route::get('/profile', function () {return view('profile.show');})->name('profile');
        Route::get('/trade', [TradeController::class, 'index'])->name('trade');
        Route::post('/trade/tokens', [TradeController::class, 'trade_token'])->name('trade_token');
        Route::post('/trade/golds', [TradeController::class, 'trade_gold'])->name('trade_gold');
        Route::get('/topup',[TopupController::class, 'index'])->name('topup');
        Route::post('/topup/adds',[TopupController::class, 'Topup'])->name('addtopup');
        Route::get('/withdraw',[WithdrawController::class, 'index'])->name('withdraw');
        Route::post('/withdraw/withdraws',[WithdrawController::class, 'withdraw'])->name('withdraws');
        Route::get('/menu', [UserController::class , 'menu'])->name('menu');
    });
});

Route::group(['prefix' => 'admin'], function () {
    // Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','admin',])->group(function () { });
    Route::middleware(['auth', 'verified','admin',])->group(function () {
            Route::get('/admindashboard', [AdminController::class, 'index'])->name('AdminDashboard');
            Route::post('/admindashboard/approve', [AdminController::class, 'Upapprove'])->name('approve');
            Route::post('/admindashboard/reject', [AdminController::class, 'Upreject'])->name('reject');
            Route::get('/not_approve', [AdminController::class, 'notapproved'])->name('NotApprove');
            Route::get('/approved', [AdminController::class, 'approved'])->name('Approved');
            Route::get('/list_topups', [AdminController::class, 'all_topups'])->name('list_topup');
            Route::get('/list_withdraws', [AdminController::class, 'all_withdraws'])->name('list_withdraw');
            Route::get('/list_tradegolds', [AdminController::class, 'all_trade_golds'])->name('list_tradegold');
            Route::get('/history_golds', [AdminController::class, 'history_gold'])->name('history_gold');
            Route::get('/about', [AdminController::class, 'about'])->name('about');
            Route::post('/about/update', [AdminController::class, 'about_update'])->name('about_update');

            Route::get('/edituser', function () {return view('admin.edituser');})->name('edituser');

    });
});
