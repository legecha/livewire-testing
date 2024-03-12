<?php

use App\Livewire\Daddy;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Daddy::class)
        ->assertStatus(200);
});

it('updates name', function () {
    Livewire::test(Daddy::class)
        ->assertSee('Arthur')
        ->set('name', 'Terry')
        ->assertSee('Terry')
    ;
});
