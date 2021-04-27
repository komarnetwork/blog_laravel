<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    //
    protected $fillable = [
        'jumlah_pesanan',
        'total_harga',
        'nama_ucapan',
        'nomor_pemesan',
        'tanggal_kirim',
        'product_id',
        'pesanan_id',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
