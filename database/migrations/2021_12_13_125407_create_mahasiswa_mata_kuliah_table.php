<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_mk', function (Blueprint $table) {
            $table->char('nim', 4);
            $table->char('kode_mk', 3);

            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah');

            $table->primary(['nim', 'kode_mk']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_mata_kuliah');
    }
}
