<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMGudanginDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudangin_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('m_barang');

            $table->unsignedInteger('id_gudangin');
            $table->foreign('id_gudangin')->references('id')->on('m_gudangin');

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
        Schema::dropIfExists('m_gudangin_detail');
    }
}
