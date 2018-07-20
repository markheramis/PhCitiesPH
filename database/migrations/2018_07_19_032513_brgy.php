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
            $table->string('brgyCode',10);
            $table->text('brgyDesc');
            $table->string('regCode',10);
            $table->string('provCode',10);
            $table->string('citymunCode',10);
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
