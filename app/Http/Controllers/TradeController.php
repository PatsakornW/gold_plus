<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TradeGold;
use App\Models\TradeToken;
use App\Models\User;
use Exception;
use Carbon\Carbon;

class TradeController extends Controller
{
    public function index()
    {
        return view('layouts.trade');
    }

    public function trade_token(Request $request)
    {
        try {
            // Validate the form data
            $data = $request->validate([
                'tokenInput' => ['required', 'numeric', 'lte:' . (Auth::user()->balance_credit / 100)],
                'creditInput' => ['required', 'numeric', 'lte:' . Auth::user()->balance_credit],
            ], [
                'tokenInput.required' => "กรูณาป้อนจำนวนโทเคน",
                'creditInput.required' => "กรูณาป้อนจำนวนเครดิต",
                'tokenInput.lte' => "จำนวนโทเคนเกินจำนวนที่สามารถแลกได้",
                'creditInput.lte' => "จำนวนเครดิตเกินจำนวนที่สามารถแลกได้",
            ]);
            // dd($data);
            if ($data['creditInput'] <= Auth::user()->balance_credit && Auth::user()->balance_credit > 0) {
                // Trade insert
                TradeToken::create([
                    'uid' => Auth::user()->id,
                    'lost_credit' => $data['creditInput'],
                    'earned_token' => $data['tokenInput'],
                ]);
                //update user
                User::where('id', Auth::user()->id)
                    ->update([
                        'balance_token' => User::raw('balance_token + ' . $data['tokenInput']),
                        'balance_credit' => User::raw('balance_credit - ' . $data['creditInput']),
                    ]);
            } else {
                // dd($data,'Error');
                return redirect()->route('trade')->with('error', 'แลกไม่สำเร็จ');
            }

            // Redirect to the
            return redirect()->route('trade')->with('success_token', 'แลกโทเคนสำเร็จ');
        } catch (Exception $e) {
            return redirect()->route('trade')->with('error_token', 'แลกโทเคนไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');
            // dd($request->all(), $e);
        }
    }


    public function trade_gold(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'selectGold' => 'required|in:1,2,3,4,5',
                    'tokenOutputSend' => 'required',
                ],
                [
                    'selectGold.required' => "กรูณาเลือกจำนวนน้ำหนักทอง",
                    'tokenOutputSend.required' => "คือบ่มีค่าส่งมาน้อ",
                ]
            );
            // Trade insert
            TradeGold::create([
                'uid' => Auth::user()->id,
                'total' => $data['selectGold'],
                'lost_token' => $data['tokenOutputSend'],
            ]);
            // //update user ปิดนับเทรดไว้ก่อน เพราะเดี๋ยวยูสมือบอลการแลกรั่วๆมันจะเปลืองพื้นโดยใช่เหตุ
            User::where('id', Auth::user()->id)
                ->update([
                    'balance_token' => User::raw('balance_token - ' . $data['tokenOutputSend']),
                ]);

            // Send notification to Line
            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://notify-api.line.me/api/notify', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('LINE_NOTIFY_TOKEN'),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'message' => "\n🔔มีรายการแลกทองใหม่รอการอนุมัติ🔔\n" . 'น้ำหนัก ' . $data['selectGold'] . " บาท\n" . 'โดยคุณ ' . Auth::user()->name . "\n เวลา " . Carbon::now(),
                    // 'stickerPackageId' => 1,
                    // 'stickerId' => 100,
                ],
            ]);
            // Redirect to the
            return redirect()->route('trade')->with('success_gold', 'ทำรายการแลกทองสำเร็จ รออนุมัติ');
        } catch (Exception $e) {
            return redirect()->route('trade')->with('error_gold', 'แลกทองไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');
            // dd($request->all(), $e);
        }
    }


    public function List()
    {
        $Tradegold = TradeGold::paginate(10);
        return view('admin.test', ['Tradegold' => $Tradegold]);
    }
}
