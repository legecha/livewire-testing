<?php

namespace App\Livewire;

use Livewire\Component;

class Daddy extends Component
{
    public string $name = 'Arthur';

    public function render()
    {
        return view('livewire.daddy');
    }
}
