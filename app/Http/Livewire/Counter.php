<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter;
    public function increment(){
        $this->counter++;
    }
    public function decrement(){
        $this->counter--;
    }
    public function mount(){
        $this->counter=0;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
