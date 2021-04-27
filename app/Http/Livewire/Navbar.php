<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Pesanan;
use App\Product;
use App\PesananDetail;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];
    
    public $jumlah = 0;

    // Pesanan Delete
    protected $pesanan;
    protected $pesanan_details = [];

   // ! 04 masukKeranjang lihat tombol submit product-detail.blade
   protected $listeners = [
    'masukkanKeranjang' => 'updateKeranjang'];

    public function updateKeranjang()
    {
        if(Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            }else {
                $this->jumlah = 0;
            }
        }
    }

    public function destroy($id)
    {
        $pesanan_detail = PesananDetail::find($id);
        if (!empty($pesanan_detail)) {

            $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
            $jumlah_pesanan_detail = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            if ($jumlah_pesanan_detail == 1) {
                // $this->jumlah = 0;
                $pesanan->delete();
            } else {
                $pesanan->total_harga = $pesanan->total_harga - $pesanan_detail->total_harga;
                // $this->jumlah = 0;
                $pesanan->update();
            }

            $pesanan_detail->delete();
        }

        $this->emit('masukKeranjang');
        // alert()->success('Title','Lorem Lorem Lorem');

        session()->flash('message', 'Pesanan Dihapus');

    }

    public function mount()
    {
        if(Auth::user()) {
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            if($pesanan) {
                $this->jumlah = PesananDetail::where('pesanan_id', $pesanan->id)->count();
            }else {
                $this->jumlah = 0;
            }
        }

    }

    public function render()
    {
        if (Auth::user()) {
            $this->pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($this->pesanan) {
                $this->pesanan_details = PesananDetail::where('pesanan_id', $this->pesanan->id)->get();
            }
        }

         // Jika user ketik search
         if($this->search) {
            $products = Product::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::paginate(8);
        }

        return view('livewire.navbar',[
            'products' => $products,
            'ligas' => Liga::find([1,2,3]),
            'hand_bucket' => Liga::find([4,5]),
            'krans_dc' => Liga::find([6]),
            'parcel' => Liga::find([7,8]),
            'jumlah_pesanan' => $this->jumlah,
            // Pesanan Delete
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ]);
    }
}
