<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMGudanginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudangin', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_suratpermintaan');
            $table->foreign('id_suratpermintaan')->references('id')->on('m_suratpermintaan');

            $table->date('tgl_masuk');
            $table->string('penerima_barang'); // diketik & user yg login
            $table->string('no_suratbukti');
            $table->string('kurir');
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
        Schema::dropIfExists('m_gudangin');
    }
}
