<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThinhCreateKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('khachhang',function(Blueprint $table){
            $table->increments('id_kh');
            $table->string('tenkh')->unique();
            $table->integer('sdt_kh');
            $table->string('diachi_kh');
            $table->string('email_kh');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('taikhoan');
    }
}
