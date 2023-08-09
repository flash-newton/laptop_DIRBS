<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{

    public function addtest(){
       
        $this->dispatchBrowserEvent("close-modal");
    }

    public function render()
    {
        return view('livewire.test');
    }
}
