<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\About;

class UserController extends Controller
{

    public function Register(Request $request)
    {
        try {
             // Validate the form data
            $data = $request->validate(
                [
                    'name' => ['required', 'max:255'],
                    'idcard' => ['required', 'max:13', 'unique:users'],
                    'birthdate' => ['required'],
                    'tel' => ['required', 'max:10'],
                    'email' => ['required', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'min:8', 'confirmed'],
                    'img_idcard' => ['required', 'mimes:jpeg,png,jpg'],
                    'img_selfieidcard' => ['required', 'mimes:jpeg,png,jpg'],
                    'address' => ['required', 'max:255'],
                    'name_bank' => ['required'],
                    'major_bank' => ['required', 'max:255'],
                    'idbank' => ['required', 'min:10', 'max:15'],
                    'img_bookbank' => ['required', 'mimes:jpeg,png,jpg']
                ],
                [
                    'name.required' => "กรูณาป้อนชื่อด้วยครับ",
                    'name.max' => "ชื่อต้องไม่เกิน 255 ตัวอักษร",
                    'idcard.required' => "กรูณาป้อนหมายเลขบัตรประชาชนด้วยครับ",
                    'idcard.max' => "หมายเลขบัตรประชาชนต้องไม่เกิน 13 ตัวอักษร",
                    'idcard.unique' => "หมายเลขบัตรประชาชนนี้ซ้ำ กรุณาเปลี่ยน",
                    'birthdate.required' => "กรูณาป้อนวันเดือนปีเกิดด้วยครับ",
                    'tel.max' => "เบอร์ต้องไม่เกิน 10 ตัวอักษร",
                    'tel.required' => "กรูณาป้อนเบอร์ด้วยครับ",
                    'email.max' => "อีเมลต้องไม่เกิน 255 ตัวอักษร",
                    'email.required' => "กรูณาป้อนอีเมลด้วยครับ",
                    'email.unique' => "อีเมลนี้ซ้ำ กรุณาเปลี่ยนอีเมล",
                    'password.required' => "กรูณาป้อนรหัสผ่านด้วยครับ",
                    'password.max' => "รหัสต้องไม่น้อยกว่า 8 ตัวอักษร",
                    'password.confirmed' => "กรูณาป้อนรหัสให้ตรงกันด้วยครับ",
                    'img_idcard.required' => "กรูณาอัพโหลดรูปบัตรประชาชนด้วยครับ",
                    'img_idcard.mimes:jpeg,png,jpg',
                    'img_selfieidcard.required' => "กรูณาอัพโหลดรูปที่ถ่ายกับบัตรประชาชนด้วยครับ",
                    'img_selfieidcard.mimes:jpeg,png,jpg',
                    'address.required' => "กรูณาป้อนที่อยู่ด้วยครับ",
                    'address.max' => "ที่อยู่ต้องไม่เกิน 255 ตัวอักษร",
                    'name_bank.required' => "กรูณาเลือกธนาคารด้วยครับ",
                    'major_bank.required' => "กรูณาป้อนสาขาธนาคารด้วยครับ",
                    'major_bank.max' => "สาขาธนาคารต้องไม่เกิน 255 ตัวอักษร",
                    'idbank.required' => "กรูณาป้อนเลขบัญชีด้วยครับ",
                    'idbank.min' => "เลขบัญชีต้องไม่น้อยกว่า 10 ตัว",
                    'idbank.max' => "เลขบัญชีต้องไม่เกิน 15 ตัว",
                    'img_bookbank.required' => "กรูณาอัพโหลดรูปหน้าสมุดบัญชีด้วยครับ",
                    'img_bookbank.mimes:jpeg,png,jpg',

                ]
            );

            $img_idcard = $request->file('img_idcard');
            $img_selfieidcard = $request->file('img_selfieidcard');
            $img_bookbank = $request->file('img_bookbank');

            $upload_location = '/image/upload/';

            $img_idcard_new_name = uniqid() . '.' . $img_idcard->getClientOriginalExtension();
            $img_selfieidcard_new_name = uniqid() . '.' . $img_selfieidcard->getClientOriginalExtension();
            $img_bookbank_new_name = uniqid() . '.' . $img_bookbank->getClientOriginalExtension();

            $img_idcard->move(public_path($upload_location), $img_idcard_new_name);
            $img_selfieidcard->move(public_path($upload_location), $img_selfieidcard_new_name);
            $img_bookbank->move(public_path($upload_location), $img_bookbank_new_name);

            // Create a new user
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'idcard' => $data['idcard'],
                'birthdate' => $data['birthdate'],
                'tel' => $data['tel'],
                'img_idcard' =>  $upload_location . $img_idcard_new_name,
                'img_selfieidcard' =>  $upload_location . $img_selfieidcard_new_name,
                'address' => $data['address'],
                'name_bank' => $data['name_bank'],
                'major_bank' => $data['major_bank'],
                'idbank' => $data['idbank'],
                'img_bookbank' => $upload_location . $img_bookbank_new_name,
            ]);

            // Log the user in
            // auth()->login($user);

            // Redirect to the
            return redirect()->route('home');
            // return redirect()->route('login')->with('message', 'เปิดบัญชีสำเร็จ กรุณาเข้าสู่ระบบ');
            // return redirect()->route('register')->with('message_success','เปิดบัญชีสำเร็จ กรุณาเข้าสู่ระบบ');

        }
        catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->errors())->withInput()->with('key', 'value');
        }

    }

    public function LoginPage (){return view('auth.login');}

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     // Authentication passed...
        //     // type 1 == Admin type 0 == user
            if (Auth::user()->type == 1) {
                return redirect()->route('dashboard');
            } else if (Auth::user()->type == 0){
                return redirect()->route('dashboard');
            }
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

    public function mylist()
    {
       $data = DB::table('trade_gold')
        ->join('users', 'trade_gold.uid', '=', 'users.id')
        ->select('trade_gold.id as id', 'trade_gold.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'trade_gold.total as total', 'trade_gold.type as type', 'trade_gold.status as status', DB::raw("'' as slip_file"), 'trade_gold.lost_token as lost_token')
        ->where('uid', Auth::user()->id)
        ->union(DB::table('topups')
            ->join('users', 'topups.uid', '=', 'users.id')
            ->select('topups.id as id', 'topups.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'topups.total as total', 'topups.type as type', 'topups.status as status', 'topups.slip_file as slip_file', DB::raw("'' as lost_token"))
            ->where('uid', Auth::user()->id))
        ->union(DB::table('withdraws')
            ->join('users', 'withdraws.uid', '=', 'users.id')
            ->select('withdraws.id as id', 'withdraws.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'withdraws.total as total', 'withdraws.type as type', 'withdraws.status as status', DB::raw("'' as slip_file"), DB::raw("'' as lost_token"))
            ->where('uid', Auth::user()->id))
        ->orderBy('created_at', 'desc')
        ->paginate(7);
        $dataAbout = About::find(1);
        return view('layouts.list', compact('data','dataAbout'));
    }

    public function menu(){return view('layouts.main');}
    public function contact(){$dataAbout = About::find(1);return view('layouts.contact', compact('dataAbout'));}
    public function welcome(){$dataAbout = About::find(1);return view('welcome', compact('dataAbout'));}
}
