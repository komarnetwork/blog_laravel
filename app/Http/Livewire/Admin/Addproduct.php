<?php

namespace App\Http\Livewire\Admin;

// use App\Product;
use App\Models\Product;
use App\Product as AppProduct;
use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Addproduct extends Component
{
    public $state = [];

    public function render()
    {
        return view('livewire.admin.addproduct');
    }

    public function createPost (){

    //    dd($this->state);
        // Product::create([
        //     'user_id' => Auth::id(),
        //     'nama' => $this->nama
        // ]);
        $validatedDate = Validator::make($this->state, [
            'alamat' => 'required'
        ])->validate();

         //Simpan alamat Alamat ke data user
        $user = User::where('id', Auth::user()->id)->first();
        $user->alamat = $this->alamat;
        $user->update();

        User::create($validatedDate);

        $this->emit('createPost');

        return redirect()->back();
    }
}
