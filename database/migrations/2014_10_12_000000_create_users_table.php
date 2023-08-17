<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('idcard')->unique();
            $table->date('birthdate');
            $table->string('tel');
            $table->string('img_idcard');
            $table->string('img_selfieidcard');
            $table->string('address');
            $table->string('name_bank');
            $table->string('idbank');
            $table->string('major_bank');
            $table->string('img_bookbank');
            $table->integer('balance_credit')->default(0);
            $table->integer('balance_token')->default(0);
            $table->integer('total_trades')->default(0);
            $table->boolean('type')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }

};
