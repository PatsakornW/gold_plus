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
        Schema::create('history_gold', function (Blueprint $table) {
            $table->id();
            $table->integer('b_gold_spot');
            $table->integer('s_gold_spot');
            $table->integer('thb');
            $table->integer('bid');
            $table->integer('ask');
            $table->string('diff');
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
        Schema::dropIfExists('history_gold');
    }
};
