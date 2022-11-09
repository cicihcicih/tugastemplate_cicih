<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            //nomor_induk_siswa ....create field NIS as integer data type
            $table->integer('nomor_induk_siswa');
            //nama .... create nama as varchar data type with lenght character 100
            $table->integer('nama');
            //alamat .. cerate alamat as varchar data type
            $table->integer('alamat');
            //jenis_kelamin .. cerate gender as varchar data type
            $table->integer('jenis_kelamin');
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
        Schema::dropIfExists('siswa');
    }
}