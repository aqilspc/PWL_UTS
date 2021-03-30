<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('barang', function (Blueprint $table) {
            $table->bigInteger('id_barang',20)->unsigned();
            $table->string('nama_barang',50);
            $table->string('kode_barang',100);
            $table->string('kategori_barang',50);
            $table->integer('harga')->unsigned();
            $table->integer('qty')->unsigned();
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
         Schema::dropIfExists('barang');
    }
}
