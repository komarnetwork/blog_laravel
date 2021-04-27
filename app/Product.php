<?php

namespace App;

use App\Liga;
use App\PesananDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'nama'
    ];

    public function liga()
    {
        return $this->belongsTo(Liga::class, 'liga_id', 'id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'product_id', 'id');
    }

    public function addproduct()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }

}
