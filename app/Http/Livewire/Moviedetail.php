<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Moviedetail extends Component
{
    public $post;

    public function mount($id)
    {
        $this->post = \App\Models\Movie::find($id);
    }
    public function render()
    {
        return view('livewire.moviedetail')->with(['data'=>$this->post]);
    }
}
