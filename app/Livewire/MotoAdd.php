<?php

namespace App\Livewire;

use Livewire\Component;

class MotoAdd extends Component
{
    public function render()
    {
        return view('livewire.moto-add');
    }

    public function listar(){
        return redirect()->route('motolist');
    }
}
