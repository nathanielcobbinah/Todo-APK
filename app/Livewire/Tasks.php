<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public $tasks = [];
    public $task = '';

    public $datetime;


    public function mount()
    {
        $this->tasks = Todo::all();
        $this->datetime = now();
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
