<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPermintaanunitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_permintaanunit', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_permintaanunit');
            $table->string('no_surat');
            $table->unsignedInteger('id_peminta');
            $table->foreign('id_peminta')->references('id')->on('users');

            $table->string('peminta'); // nama peminta
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
        Schema::dropIfExists('m_permintaanunit');
    }
}
