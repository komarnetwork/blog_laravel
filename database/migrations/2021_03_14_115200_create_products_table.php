<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique()->nullable();
            $table->integer('harga')->default(0);
            $table->integer('harga_nameset')->default(700000)->nullable();
            $table->integer('liga_id');
            $table->boolean('is_ready')->default(true);
            $table->string('jenis')->default('Bunga');
            $table->float('berat')->default(10.5);
            $table->string('gambar');
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
        Schema::dropIfExists('products');
    }
}
