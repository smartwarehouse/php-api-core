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

            $table->unsignedInteger('id_permintaanunit');
            $table->foreign('id_permintaanunit')->references('id')->on('m_permintaanunit');

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
