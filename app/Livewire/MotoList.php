<?php

namespace App\Livewire;

use Livewire\Component;

class MotoList extends Component
{
    public function render()
    {
        return view('livewire.moto-list');
    }

    public function create(){
         return redirect()->route('motoadd');
    }
}
