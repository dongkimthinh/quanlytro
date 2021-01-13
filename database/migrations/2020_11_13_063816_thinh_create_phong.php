<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThinhCreatePhong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('phong',function(Blueprint $table){
            $table->increments('id_phong');
            $table->integer('id_loai_phong');
            $table->string('ten_phong');
            $table->string('mota');
            $table->float('gia');
            $table->float('dientich');
            $table->string('hinh_phong');
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
        Schema::dropIfExists('phong');
    }
}
