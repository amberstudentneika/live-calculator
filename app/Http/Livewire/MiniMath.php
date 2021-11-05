<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MiniMath extends Component
{
    public $sum;
    public $Num1;
    public $Num2;

    public function onAdd(){
        $this->sum = $this->Num1 + $this->Num2;
    }

    public function render()
    {
        return view('livewire.mini-math');
    }
}
