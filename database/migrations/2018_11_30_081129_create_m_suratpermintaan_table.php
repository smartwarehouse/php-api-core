<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSuratpermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_suratpermintaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('penanggung_jawab');

            $table->unsignedInteger('id_vendor');
            $table->foreign('id_vendor')->references('id')->on('m_vendor');

            $table->date('tanggal_max');
            $table->string('nama_vendor');
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
        Schema::dropIfExists('m_suratpermintaan');
    }
}
