<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class City extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city',function (Blueprint $table) {
            $table->increments('id');
            $table->string('psgcCode',255);
            $table->text('citymunDesc');
            $table->string('regDesc',255);
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
        Schema::drop('city');
    }
}
