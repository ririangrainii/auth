<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->id();
            $table->string('nama_product');
            $table->unsignedBigInteger('kategori_id');
            $table->integer('harga');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->foreign('kategori_id')->references('id')->on('tb_kategori')->onDelete('cascade');
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
        Schema::dropIfExists('tb_product');
    }
}
