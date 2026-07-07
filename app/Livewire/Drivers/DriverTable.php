<?php

namespace App\Livewire\Drivers;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Driver;

class DriverTable extends Component
{
    use WithPagination;

    public $search='';

    public $perPage=10;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $drivers=Driver::query()

        ->when($this->search,function($query){

            $query->where('name','like',"%{$this->search}%")
                  ->orWhere('email','like',"%{$this->search}%")
                  ->orWhere('phone','like',"%{$this->search}%");

        })

        ->paginate($this->perPage);

        return view('livewire.drivers.driver-table',compact('drivers'));
    }
}