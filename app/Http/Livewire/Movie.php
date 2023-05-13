<?php

namespace App\Http\Livewire;

use App\Http\Controllers\MovieController;
use Livewire\Component;

class Movie extends Component
{
    public function render()
    {
        $data=MovieController::get_trend();
        return view('livewire.movie')->with(array('data'=>$data));
    }
}
