<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPermintaanunitDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_permintaanunit_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_permintaanunit');
            $table->foreign('id_permintaanunit')->references('id')->on('m_permintaanunit');

            $table->unsignedInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('m_barang');

            $table->integer('jumlah');
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
        Schema::dropIfExists('m_permintaanunit_detail');
    }
}
