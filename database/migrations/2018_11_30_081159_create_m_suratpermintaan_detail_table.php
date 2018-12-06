<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSuratpermintaanDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_suratpermintaan_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_suratpermintaan');
            $table->foreign('id_suratpermintaan')->references('id')->on('m_suratpermintaan');

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
        Schema::dropIfExists('m_suratpermintaan_detail');
    }
}
