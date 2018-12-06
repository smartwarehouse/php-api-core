<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMGudangoutDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudangout_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('m_barang');

            $table->unsignedInteger('id_gudangout');
            $table->foreign('id_gudangout')->references('id')->on('m_gudangout');

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
        Schema::dropIfExists('m_gudangout_detail');
    }
}
