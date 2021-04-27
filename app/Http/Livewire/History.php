<?php

namespace App\Http\Livewire;

use App\Pesanan;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class History extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];
    
    //  Validasi Jika Belum Login
    // public function mount(){
    //     if(!Auth::user()) {
    //         return redirect()->route('login');
    //     }
    // }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if(Auth::user())
        {
            $this->pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();
        }

         // Jika user ketik search
         if($this->search) {
            $pesanans = Pesanan::where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        }else {
            $pesanans = Pesanan::paginate(8);
        }

        return view('livewire.history', [
            'pesanans' => $pesanans
        ]);
    }
}