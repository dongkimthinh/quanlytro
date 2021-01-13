<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThinhCreateSlide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Slide',function(Blueprint $table){
            $table->bigIncrements('id_slide');
            $table->string('TenPhong')->constrained();
            $table->longText('MotaPhong')->constrained();
            $table->string('AnhSlide');
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
        Schema::dropIfExists('Silde');
    }
}
