<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Son extends Component
{
    #[Reactive]
    public string $name;

    public function render()
    {
        return view('livewire.son');
    }
}
