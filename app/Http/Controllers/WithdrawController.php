<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Auth;
use Exception;
use Carbon\Carbon;

class WithdrawController extends Controller
{
    public function index()
    {
        return view('layouts.withdraw');
    }

    public function withdraw(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'withdraw_amount' => ['required'],
                ],
                [
                    'withdraw_amount.required' => "กรุณากรอกจำนวนเงิน",
                ]
            );
            $withdraw_amount = $data['withdraw_amount'];
            $balance = Auth::user()->balance_credit;

            if ($withdraw_amount <= $balance && $withdraw_amount >= 100) {
                // Withdraw insert
                Withdraw::create([
                    'uid' => Auth::user()->id,
                    'total' => $data['withdraw_amount'],
                ]);

                $client = new \GuzzleHttp\Client();
                $response = $client->post('https://notify-api.line.me/api/notify', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . env('LINE_NOTIFY_TOKEN'),
                        'Content-Type' => 'application/x-www-form-urlencoded',
                    ],
                    'form_params' => [
                        'message' => "\n🔔มีรายการถอนใหม่รอการอนุมัติ🔔\n" . 'จำนวน ' . $data['withdraw_amount'] . " บาท\n" . 'โดยคุณ ' . Auth::user()->name . "\n เวลา " . Carbon::now(),
                        // 'stickerPackageId' => 1,
                        // 'stickerId' => 100,
                    ],
                ]);
                // Redirect to the
                return redirect()->route('withdraw')->with('success', 'ทำรายการถอนสำเร็จ รออนุมัติ ประมาณ 3-5 นาที');
            } else {
                return redirect()->route('withdraw')->with('error', 'ถอนไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');
            }
        } catch (Exception $e) {
            return redirect()->route('withdraw')->with('error', 'ถอนไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');
        }
    }
}
