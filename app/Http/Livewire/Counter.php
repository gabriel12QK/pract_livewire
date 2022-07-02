<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public  $numero=0;
 
    public function increment()
    {
        $this->numero++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
    public function decrement()
    {
        $this->numero--;
    }
    public function resetear()
    {
        $this->numero=0;
    }
}
