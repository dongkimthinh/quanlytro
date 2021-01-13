<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThinhCreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admin',function(Blueprint $table){
            $table->increments('id_ad');
            $table->string('ten_admin')->unique();
            $table->integer('sdt_admin');
            $table->string('diachi_admin');
            $table->string('email_admin');
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
        Schema::dropIfExists('admin');
    }
}
