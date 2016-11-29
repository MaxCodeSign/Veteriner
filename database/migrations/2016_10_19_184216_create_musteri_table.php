<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusteriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('musteri', function (Blueprint $table) {
            $table->increments('mus_id');
            $table->string('ad');
            $table->string('soyad');
            $table->string('telefon');
            $table->string('tc')->unique();
            $table->string('adres');
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

        Schema::drop('musteri');
    }
}
