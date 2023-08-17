<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TradeGold;
use App\Models\Topup;
use App\Models\Withdraw;
use App\Models\User;
use App\Models\About;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    public function index()
    {
        $data = DB::table('trade_gold')
            ->join('users', 'trade_gold.uid', '=', 'users.id')
            ->select('trade_gold.id as id', 'trade_gold.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'trade_gold.total as total', 'trade_gold.type as type', 'trade_gold.status as status', DB::raw("'' as slip_file"), 'trade_gold.lost_token as lost_token')
            ->where('trade_gold.status', 'รออนุมัติ')
            ->union(DB::table('topups')
                ->join('users', 'topups.uid', '=', 'users.id')
                ->select('topups.id as id', 'topups.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'topups.total as total', 'topups.type as type', 'topups.status as status', 'topups.slip_file as slip_file', DB::raw("'' as lost_token"))
                ->where('topups.status', 'รออนุมัติ'))
            ->union(DB::table('withdraws')
                ->join('users', 'withdraws.uid', '=', 'users.id')
                ->select('withdraws.id as id', 'withdraws.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'withdraws.total as total', 'withdraws.type as type', 'withdraws.status as status', DB::raw("'' as slip_file"), DB::raw("'' as lost_token"))
                ->where('withdraws.status', 'รออนุมัติ'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);
        return view('admin.dashboard', compact('data'));
    }

    public function approved()
    {
        $dataApproved = DB::table('trade_gold')
            ->join('users', 'trade_gold.uid', '=', 'users.id')
            ->select('trade_gold.id as id', 'trade_gold.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'trade_gold.total as total', 'trade_gold.type as type', 'trade_gold.status as status', DB::raw("'' as slip_file"), 'trade_gold.lost_token as lost_token')
            ->where('trade_gold.status', 'อนุมัติ')
            ->union(DB::table('topups')
                ->join('users', 'topups.uid', '=', 'users.id')
                ->select('topups.id as id', 'topups.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'topups.total as total', 'topups.type as type', 'topups.status as status', 'topups.slip_file as slip_file', DB::raw("'' as lost_token"))
                ->where('topups.status', 'อนุมัติ'))
            ->union(DB::table('withdraws')
                ->join('users', 'withdraws.uid', '=', 'users.id')
                ->select('withdraws.id as id', 'withdraws.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'withdraws.total as total', 'withdraws.type as type', 'withdraws.status as status', DB::raw("'' as slip_file"), DB::raw("'' as lost_token"))
                ->where('withdraws.status', 'อนุมัติ'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);
        return view('admin.approve', compact('dataApproved'));
    }

    public function notapproved()
    {

        $dataNotApproved = DB::table('trade_gold')
            ->join('users', 'trade_gold.uid', '=', 'users.id')
            ->select('trade_gold.id as id', 'trade_gold.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'trade_gold.total as total', 'trade_gold.type as type', 'trade_gold.status as status', DB::raw("'' as slip_file"), 'trade_gold.lost_token as lost_token')
            ->where('trade_gold.status', 'ปฏิเสธ')
            ->union(DB::table('topups')
                ->join('users', 'topups.uid', '=', 'users.id')
                ->select('topups.id as id', 'topups.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'topups.total as total', 'topups.type as type', 'topups.status as status', 'topups.slip_file as slip_file', DB::raw("'' as lost_token"))
                ->where('topups.status', 'ปฏิเสธ'))
            ->union(DB::table('withdraws')
                ->join('users', 'withdraws.uid', '=', 'users.id')
                ->select('withdraws.id as id', 'withdraws.created_at as created_at', 'users.name as name', 'users.id as uid', 'users.idbank as idbank', 'users.name_bank as name_bank', 'withdraws.total as total', 'withdraws.type as type', 'withdraws.status as status', DB::raw("'' as slip_file"), DB::raw("'' as lost_token"))
                ->where('withdraws.status', 'ปฏิเสธ'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);
        return view('admin.not_approve', compact('dataNotApproved'));
    }

    public function all_topups()
    {
        $data_all_topups = (DB::table('topups')
            ->join('users', 'topups.uid', '=', 'users.id')
            ->select('topups.created_at as created_at', 'users.name as name', 'topups.total as total', 'topups.type as type', 'topups.slip_file as slip_file', 'users.idbank as idbank', 'users.name_bank as name_bank', 'topups.status')
            ->where('topups.type', 'ฝาก'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        return view('admin.list_topup', compact('data_all_topups'));
    }

    public function all_withdraws()
    {
        $data_all_withdraws = (DB::table('withdraws')
            ->join('users', 'withdraws.uid', '=', 'users.id')
            ->select('withdraws.created_at as created_at', 'users.name as name', 'withdraws.total as total', 'withdraws.type as type', 'users.idbank as idbank', 'users.name_bank as name_bank', 'withdraws.status')
            ->where('withdraws.type', 'ถอน'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        return view('admin.list_withdraw', compact('data_all_withdraws'));
    }

    public function all_trade_golds()
    {
        $data_all_trade_golds = (DB::table('trade_gold')
            ->join('users', 'trade_gold.uid', '=', 'users.id')
            ->select('trade_gold.created_at as created_at', 'users.name as name', 'trade_gold.total as total', 'trade_gold.type as type', 'trade_gold.status as status', 'trade_gold.lost_token as lost_token')
            ->where('trade_gold.type', 'แลก'))
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        return view('admin.list_tradegold', compact('data_all_trade_golds'));
    }

    public function history_gold()
    {
        $data_history_gold = DB::table('history_gold')
            ->select('created_at', 'bid', 'ask', 'b_gold_spot', 's_gold_spot', 'thb', 'diff')
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        return view('admin.history_gold', compact('data_history_gold'));
    }

    public function Upapprove(Request $request)
    {
        $type = $request->type;
        $total = $request->total;
        $uid = $request->uid;
        $id = $request->id;

        if ($type == 'แลก') {
            $data = TradeGold::find($id);
            $data->status = 'อนุมัติ';
            $data->save();
            $data = User::findOrFail($uid);
            $data->total_trades += 1;
            $data->save();
            return redirect()->route('AdminDashboard')->with('success', 'อนุมัติ');
        } else if ($type == 'ฝาก') {
            $data = Topup::find($id);
            $data->status = 'อนุมัติ';
            $data->save();
            $user = User::findOrFail($uid);
            $user->balance_credit += $total;
            $user->save();
            return redirect()->route('AdminDashboard')->with('success', 'อนุมัติ');
        } else if ($type == 'ถอน') {
            $user = User::findOrFail($uid);
            if ($user->balance_credit >= $total) {
                $data = Withdraw::find($id);
                $data->status = 'อนุมัติ';
                $data->save();
                $user->balance_credit -= $total;
                $user->save();
                return redirect()->route('AdminDashboard')->with('success', 'อนุมัติ');
            } else {
                return redirect()->route('AdminDashboard')->with('error', 'อนุมัติไม่สำเร็จ');
            }
        }
        // dd($request->all());
        return redirect()->route('AdminDashboard')->with('error', 'อนุมัติไม่สำเร็จ');
    }

    public function Upreject(Request $request)
    {
        $type = $request->type;
        $id = $request->id;
        $uid = $request->uid;

        if ($type == 'แลก') {
            $data = TradeGold::find($id);
            $data->status = 'ปฏิเสธ';
            $data->save();
            $user = User::findOrFail($uid);
            $user->balance_token += $request->lost_token;
            $user->save();
            return redirect()->route('AdminDashboard')->with('success', 'ปฏิเสธ');
        } else if ($type == 'ฝาก') {
            $data = Topup::find($id);
            $data->status = 'ปฏิเสธ';
            $data->save();
            return redirect()->route('AdminDashboard')->with('success', 'ปฏิเสธ');
        } else if ($type == 'ถอน') {
            $data = Withdraw::find($id);
            $data->status = 'ปฏิเสธ';
            $data->save();
            return redirect()->route('AdminDashboard')->with('success', 'ปฏิเสธ');
        }
        return redirect()->route('AdminDashboard')->with('error', 'ปฏิเสธไม่สำเร็จ');;
    }

    public function about()
    {
        $dataAbout = About::find(1);
        return view('admin.about', compact('dataAbout'));
    }

    public function about_update(Request $request)
    {
        try {
            About::where('id', 1)
                ->update([
                    'credit_per_token' => $request->credit_per_token,
                    'token_per_gold' => $request->token_per_gold,
                    'about_address' => $request->edit_about_address,
                    'about_tel' => $request->edit_about_tel,
                    'about_email' => $request->edit_about_email,
                    'idbank' => $request->idbank,
                    'namebank' => $request->namebank,
                ]);

            // Redirect to the
            return redirect()->route('about')->with('success', 'แก้ไขข้อมูลสำเร็จ');
        } catch (\Exception $e) {
            // Redirect to the
            return redirect()->route('about')->with('error', 'แก้ไขข้อมูลไม่สำเร็จ');
        }
    }
}
