<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->char('kode_mk', 3)->primary();
            $table->string('nama_mk',64);
            $table->tinyInteger('sks');
            $table->tinyInteger('semester');
            $table->char('kode_dosen', 2);
            $table->foreign('kode_dosen')->references('kode_dosen')->on('dosen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
}
