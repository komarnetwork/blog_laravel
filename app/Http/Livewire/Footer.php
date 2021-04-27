<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Pesanan;
use App\Product;
use App\PesananDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Footer extends Component
{
    public $jumlah = 0;

    // Pesanan Delete
    protected $pesanan;
    protected $pesanan_details = [];

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


        return view('livewire.footer', [
            'ligas' => Liga::all(),
            'jumlah_pesanan' => $this->jumlah,
            'pesanan' => $this->pesanan
        ]);
    }
}
