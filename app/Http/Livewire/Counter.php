<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = 'Nhat Dinh';
    public $loud = false;
    public $greeting = 'Hello';

    public function render()
    {
        return view('livewire.counter');
    }
}
