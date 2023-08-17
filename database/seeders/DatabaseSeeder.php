<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\About;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

          // Insert first admin on table users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('0803208645'),
            'type' => 1,
            'idcard' => '0',
            'birthdate' => Carbon::now(),
            'tel' => '0',
            'img_idcard' => '0',
            'img_selfieidcard' => '0',
            'address' => '0',
            'name_bank' => '0',
            'major_bank' => '0',
            'idbank'=> '0',
            'img_bookbank' => '0',
            'balance_credit' => '0',
            'balance_token' => '0',
            'total_trades' => '0',
        ]);

        // Insert first data for system on table abouts
        About::create([
            'credit_per_token' => 100,
            'token_per_gold' => 10,
            'about_address' => 'Suppose Address Company Goldplus Co., Ltd. 111/11 T. Tambon A. Amphoe P. Province Zip Code 1234',
            'about_tel' => '0812345678',
            'about_email' => 'savinggolds@suppose.com',
            'idbank' => '7412589630',
            'namebank' => 'Bank Brabrabrabra'
        ]);
    }
}
