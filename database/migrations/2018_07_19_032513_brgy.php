<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Brgy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brgy',function(Blueprint $table){
            $table->increments('id');
            $table->string('brgyCode',255);
            $table->text('brgyDesc');
            $table->string('regCode',255);
            $table->string('provCode',255);
            $table->string('citymunCode',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brgy');
    }
}
