<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Artesaos\SEOTools\Facades\SEOMeta;

class ProductLiga extends Component
{

    use WithPagination;

    public $search, $liga, $slug;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($slug)
    {
        // $ligaDetail = Liga::find($ligaId);
        $ligaDetail = Liga::where('slug' ,$slug)->first();

        if($ligaDetail) {
            $this->liga = $ligaDetail;
        }
    }

    public function render()
    {
        // $this->title()->setTitle('Home');
        SEOMeta::setTitle($this->liga->nama);
        SEOMeta::setDescription('Toko Bunga Terpercaya');
        SEOMeta::addKeyword(['bunda florist', 'toko bunga', 'toko bunga online', 'toko bunga terpercaya', 'bunga tangan', 'toko bunga tangan']);

        if($this->search) {
            $products = Product::where('liga_id', $this->liga->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::where('liga_id', $this->liga->id)->paginate(8);
        }

        return view('livewire.product-liga', [
            'products' => $products,
            'title' => $this->liga->nama
        ]);
    }
}
