<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

class CreateAktaKartukeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akta_kartukeluarga', function (Blueprint $table) {
            $table->bigIncrements('no');
            // $table->integer('rt', false, true)->default(2);
            // $table->integer('rw', false, true)->default(2);
            // $table->integer('kode_pos', false, true)->default(2);
            $table->string('nama_kepala_keluarga', 100);
            $table->integer('Rt')->unsigned()->default(2);
            $table->integer('Rw')->unsigned()->default(2);
            $table->integer('kode_pos')->unsigned()->default(5);
            $table->string('desa', 30);
            $table->string('kecamatan', 30);
            $table->string('kota', 30);
            $table->string('provinsi', 30);
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
        Schema::dropIfExists('akta_kartukeluarga');
    }
}
