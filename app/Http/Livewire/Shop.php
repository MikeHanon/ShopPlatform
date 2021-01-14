<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Shop extends Component
{
    public $shop;

    public function addLike()
    {
        if(auth()->check()){
            auth()->user()->likes()->toggle($this->shop->id);
        }else{
            $this->emit('flash', 'Merci de vous connecter pour ajouter un magasin à vos favoris', 'error');
        }
       
    }
        

    public function render()
    {
        return view('livewire.shop');
    }
}
