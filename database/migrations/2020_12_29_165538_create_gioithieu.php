<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGioithieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gioithieu', function (Blueprint $table) {
            $table->id('id');
            $table->string('ten');
            $table->string('tieude');
            $table->string('noidung');
            $table->string('anh');
            $table->string('magiamgia');
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
        Schema::dropIfExists('gioithieu');
    }
}
