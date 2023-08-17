<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Topup;
use Exception;
use Carbon\Carbon;
use App\Models\About;

class TopupController extends Controller
{
    public function index()
    {
        $dataAbout = About::find(1);
        return view('layouts.topup', compact('dataAbout'));
    }

    public function Topup(Request $request)
    {
        try {
            $data = $request->validate(
                [
                    'amount_topup' => ['required'],
                    'slip_file' => ['required'],
                ],
                [
                    'amount_topup.required' => "กรูณากรอกจำนวนเงินเติม",
                    'slip_file.required' => "กรุณาอัพโหลดสลิป",
                ]
            );
            $upload_location = '/image/upload/';
            $slip_file = $request->file('slip_file');
            $new_slip_file = $upload_location.$slip_file->getClientOriginalName();
            $slip_file->move(public_path($upload_location), $new_slip_file);

            // Topup insert
            Topup::create([
                'uid' => Auth::user()->id,
                'total' => $data['amount_topup'],
                'slip_file' => $new_slip_file,
            ]);
            // Send notification to Line
            $client = new \GuzzleHttp\Client();
            $response = $client->post('https://notify-api.line.me/api/notify', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('LINE_NOTIFY_TOKEN'),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => [
                    'message' => "\n🔔มีรายการฝากใหม่รอการอนุมัติ🔔\n" . 'จำนวน ' . $data['amount_topup'] . " บาท\n" . 'โดยคุณ ' . Auth::user()->name . "\n เวลา " . Carbon::now(),
                    // 'stickerPackageId' => 1,
                    // 'stickerId' => 100,
                ],
            ]);
            // Redirect to the
            return redirect()->route('topup')->with('success', 'ทำรายการฝากสำเร็จ รออนุมัติฝาก');
        } catch (Exception $e) {
            return redirect()->route('topup')->with('error', 'ฝากไม่สำเร็จ สลิปซ้ำ หรือไม่ได้อัพโหลด กรุณาลองใหม่อีกครั้ง');
            // dd($request->all(), $e);
        }
    }
}
