<?php

namespace App\Http\Livewire;

use App\Models\shop;
use Livewire\Component;
use Ramsey\Uuid\Type\Integer;

class Search extends Component
{
    public String $query = '';
    public $shops = [];
    public Int $selectedIndex = 0;

    public function incrementIndex()
    {
        if($this->selectedIndex === count($this->shops) - 1){
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex()
    {
        if($this->selectedIndex === 0){
            $this->selectedIndex = (count($this->shops) -1);
            return;
        }

        $this->selectedIndex--;
    }

    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if (strlen($this->query) > 2){
            $this->shops = shop::where('name', 'like', $words )
            ->orWhere('category', 'like', $words)->get();
        }
        

        
    }

    public function render()
    {
        return view('livewire.search');
    }
}
