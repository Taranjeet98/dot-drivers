<?php

namespace App\Livewire\Drivers;

use Livewire\Component;

class CreateDriver extends Component
{
    public string $title = 'Add Driver';
    public function render()
    {
        return view('livewire.drivers.create-driver');
    }
}
