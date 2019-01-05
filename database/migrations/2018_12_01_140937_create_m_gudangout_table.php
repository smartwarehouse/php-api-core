<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMGudangoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudangout', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nomor_gudang');
            $table->date('tgl');
            $table->dateTime('estimasi_pengiriman');

            $table->unsignedInteger('id_permintaanunit');
            $table->foreign('id_permintaanunit')->references('id')->on('m_permintaanunit');

            $table->unsignedInteger('id_jeniskeluar');
            $table->foreign('id_jeniskeluar')->references('id')->on('m_jeniskeluar');

            $table->unsignedInteger('id_statuskirim');
            $table->foreign('id_statuskirim')->references('id')->on('m_statuskirim');

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
        Schema::dropIfExists('m_gudangout');
    }
}
