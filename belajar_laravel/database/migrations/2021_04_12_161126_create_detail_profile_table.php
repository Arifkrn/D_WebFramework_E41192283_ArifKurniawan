<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nohp');
            $table->timestamps();
        });

        Schema::create('info', function (Blueprint $table) {
            $table->string('deskripsi');
        });

        Schema::create('lokasi', function (Blueprint $table) {
            $table->increments('id_lokasi');
            $table->string('lokasi');
            
        });

        Schema::create('pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pelamar');
            
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_looker');
    }
}
