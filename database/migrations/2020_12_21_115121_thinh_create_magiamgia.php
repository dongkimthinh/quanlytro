<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThinhCreateMagiamgia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('magiamgia',function(Blueprint $table){
            $table->increments('id');
            $table->string('ten_ma');
            $table->string('magiamgia');
            $table->integer('soluong');
            $table->string('dieu_kien_giam');
            $table->string('gia_giam');
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
        //
        Schema::dropIfExists('magiamgia');
    }
}
