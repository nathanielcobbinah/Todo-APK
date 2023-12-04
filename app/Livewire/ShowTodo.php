<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class ShowTodo extends Component
{
    public function render()
    {
        $tasks = Todo::all();
        return view('livewire.show-todo');
    }
}
