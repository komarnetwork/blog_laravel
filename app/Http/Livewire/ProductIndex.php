<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search, $liga, $slug;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // public function mount($slug)
    // {
    //     // $ligaDetail = Liga::find($ligaId);
    //     $ligaDetail = Liga::where('slug' ,$slug)->first();

    //     if($ligaDetail) {
    //         $this->liga = $ligaDetail;
    //     }
    // }

    public function render()
    {

        // Jika user ketik search
        if($this->search) {
            $products = Product::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Semua Product'
        ]);
    }
}
