<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FetchDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:auto_insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('http://www.thaigold.info/RealTimeDataV2/gtdata_.txt');
        $json = $response->body();
        $data = json_decode($json, true);
        if(!empty($data)) {
            DB::table('history_gold')->insert([
                    'b_gold_spot' => $data[1]['bid'],
                    's_gold_spot' => $data[1]['ask'],
                    'thb' => $data[3]['bid'],
                    'bid' => $data[4]['bid'],
                    'ask' => $data[4]['ask'],
                    'diff' => $data[4]['diff'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
            ]);
        }
    }

}
