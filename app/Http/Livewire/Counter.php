<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter')->with(array('data'=>rand(1,10)));
    }
}
