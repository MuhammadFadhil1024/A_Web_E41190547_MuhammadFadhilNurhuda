<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartutandapendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartutandapenduduk', function (Blueprint $table) {
            $table->bigInteger('nik')->unsigned()->default(16);
            $table->bigInteger('no_kk')->unsigned()->default(16);
            $table->string('agama', 10);
            $table->string('perkawinan', 11);
            $table->string('gol_darah', 2);
            $table->string('pekerjaan', 30);
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
        Schema::dropIfExists('kartutandapenduduk');
    }
}
