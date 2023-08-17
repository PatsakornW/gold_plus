<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_gold', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->integer('total');
            $table->integer('lost_token');
            $table->string('type')->default('แลก');
            $table->string('status')->default('รออนุมัติ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_gold');
    }
};
