<?php

namespace App\Http\Livewire;

use App\Posts;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;

class Blog extends Component
{
    public function render()
    {
        SEOMeta::addMeta('turbolinks-visit-control', 'reload');

        $data = Posts::orderBy('created_at', 'desc')->get();
        return view('livewire.blog', [
            'data' => $data
        ]);
    }
}
