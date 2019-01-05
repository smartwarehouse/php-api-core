<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // handle barang rusak
        Schema::create('m_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_permintaanunit');
            $table->string('no_surat');
            $table->unsignedInteger('id_peminta');
            $table->foreign('id_peminta')->references('id')->on('users');
            $table->string('nama_peminta'); // nama peminta

            $table->unsignedInteger('id_inspeksi');
            $table->string('nama_inspeksi');
            $table->dateTime('tanggal_inspeksi');
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
        Schema::dropIfExists('m_surat');
    }
}
