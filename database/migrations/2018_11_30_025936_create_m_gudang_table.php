<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_gudang');
            $table->string('nama');
            $table->text('alamat');

            $table->unsignedInteger('id_jenis_gudang');
            $table->foreign('id_jenis_gudang')->references('id')->on('m_jenis_gudang');

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
        Schema::dropIfExists('m_gudang');
    }
}
