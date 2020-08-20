<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Counter extends Component
{
    public $counter;
    public $step;
    public $hydrate=1;
    public function increment($step){
//        $this->counter=$this->counter+ $this->step;
        $this->counter+=$step;
    }
    public function decrement($step){
        $this->counter-=$step;
    }
    //depemdency injection
    public function mount(Request $request, $steps=1){
        $this->counter=0;
        $this->step=$request->steps ?? $steps;
    }
//    public function updated(){
//        $this->hydrate++;
//    }
//    public function updating()
//    {
//        $this->hydrate++;
//    }
    public function hydrate()
    {
        $this->hydrate++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
