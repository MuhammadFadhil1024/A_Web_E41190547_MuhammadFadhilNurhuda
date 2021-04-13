<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartukematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartukematian', function (Blueprint $table) {
            $table->bigInteger('nik')->unsigned()->default(16);
            $table->string('jkl', 9);
            $table->text('alamat');
            $table->integer('umur')->unsigned()->default(3);
            $table->date('tanggal_kamatian');
            $table->string('tempat_kamatian', 20);
            $table->string('nama_pelapor', 100);
            $table->string('hubungan', 10);
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
        Schema::dropIfExists('kartukematian');
    }
}
