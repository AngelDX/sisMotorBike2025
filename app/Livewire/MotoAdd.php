<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Motorbike;
use Livewire\Component;

class MotoAdd extends Component{
    public $brand_id,$model,$description,$color,$state,$price;

    protected $rules=[
        'brand_id'=>'required',
        'model'=>'required',
        'color'=>'required',
        'state'=>'required',
        'price'=>'required',
    ];

    public function render(){
        $marcas=Brand::all();
        return view('livewire.moto-add',compact('marcas'));
    }

    public function listar(){
        $this->validate();

        Motorbike::create([
            'brand_id'=>$this->brand_id,
            'model'=>$this->model,
            'description'=>$this->description,
            'color'=>$this->color,
            'state'=>$this->state,
            'price'=>$this->price,
        ]);
        return redirect()->route('motolist');
    }
}
