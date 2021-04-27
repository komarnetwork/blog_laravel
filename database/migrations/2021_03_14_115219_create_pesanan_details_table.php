<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->string('nama_ucapan')->nullable();
            $table->string('nomor_pemesan')->nullable();
            $table->date('tanggal_kirim')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('pesanan_id');
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
        Schema::dropIfExists('pesanan_details');
    }
}
