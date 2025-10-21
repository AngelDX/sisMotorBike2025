<?php

namespace App\Livewire;

use App\Models\Motorbike;
use Livewire\Component;

class MotoList extends Component
{
    public function render()
    {
        $motos=Motorbike::all();
        return view('livewire.moto-list',compact('motos'));
    }

    public function create(){
         return redirect()->route('motoadd');
    }
}
