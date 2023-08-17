<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\User;
use Illuminate\Support\Facades\DB;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public

    function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->type == 1) {
            $data = $this->send_count();
            view()->share($data);
            return $next($request);
        } else {
            abort(403, 'You are not allowed to access this, Stop doing something stupid !!! You are not Administrator');
            // return redirect()->route('home')->with('error', 'You are not allowed to access this, Stop doing something');
        }
    }

    public function send_count()
    {
        $count_waitapprove = DB::table('trade_gold')
            ->select('id')
            ->where('status', 'รออนุมัติ')
            ->unionAll(DB::table('topups')->select('id')->where('status', 'รออนุมัติ'))
            ->unionAll(DB::table('withdraws')->select('id')->where('status', 'รออนุมัติ'))
            ->count();

        $count_notapprove = DB::table('trade_gold')
            ->select('id')
            ->where('status', 'ปฏิเสธ')
            ->unionAll(DB::table('topups')->select('id')->where('status', 'ปฏิเสธ'))
            ->unionAll(DB::table('withdraws')->select('id')->where('status', 'ปฏิเสธ'))
            ->count();

        $count_approved = DB::table('trade_gold')
            ->select('id')
            ->where('status', 'อนุมัติ')
            ->unionAll(DB::table('topups')->select('id')->where('status', 'อนุมัติ'))
            ->unionAll(DB::table('withdraws')->select('id')->where('status', 'อนุมัติ'))
            ->count();

        $data = array(
            'count_waitapprove' => $count_waitapprove,
            'count_notapprove' => $count_notapprove,
            'count_approved' => $count_approved
        );
        return $data;
    }
}
