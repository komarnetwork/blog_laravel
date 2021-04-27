<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Artesaos\SEOTools\Facades\SEOMeta;

class Home extends Component
{
    

    public function render()
    {
        SEOMeta::setTitle('Bunda Florist Toko Bunga Online 24 Jam');
        SEOMeta::setDescription('Toko Bunga terpercaya');
        SEOMeta::addKeyword(['bunda florist', 'toko bunga', 'toko bunga online', 'toko bunga terpercaya']);
        // ketika kembali ke homepage maka akan reload
        SEOMeta::addMeta('turbolinks-visit-control', 'reload');
        
        // cek apakah user memiliki role admin?
        // dd(Auth()->user()->hasRole('admin'));
        return view('livewire.home', [
            // 'products' => Product::with('krans', 'bucket', 'papan_bunga')->get(),
            'products' => Product::take(7)->get(),
            'ligas' => Liga::all(),
            'bunga_tangan' => Liga::find([4]),
            'krans' => Liga::find([6]),
            'bucket' => Liga::find([4]),
            'papan_bunga' => Liga::find([1])

        ]);
    }
}
