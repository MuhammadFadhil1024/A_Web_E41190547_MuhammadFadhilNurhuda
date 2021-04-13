<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktaKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akta_kelahiran', function (Blueprint $table) {
            $table->bigIncrements('nik', 16);
            $table->string('nama', 100);
            $table->string('JKl', 9);
            $table->date('ttl');
            $table->string('tempat_lahir', 20);
            $table->string('anak_ke', 2);
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
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
        Schema::dropIfExists('akta_kelahiran');
    }
}
