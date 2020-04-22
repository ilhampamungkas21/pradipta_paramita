<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBestsellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bestseller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->text('deskripsi_barang');
            $table->integer('harga_normal')->unsigned();;
            $table->integer('harga_diskon')->unsigned();;
            $table->string('gambar_barang');
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
        Schema::dropIfExists('bestseller');
    }
}
