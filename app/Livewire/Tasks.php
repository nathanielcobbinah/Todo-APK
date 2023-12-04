<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Tasks extends Component
{
    public $task;
    public $date;
    public $time;
    public $tasks = [];  // Initialize an empty array

    public function mount()
    {
        $this->tasks = Todo::all() ;
    }

    public function addTask()
    {
        $task = Todo::create([
            'task' => $this->task,
            'due_date' => $this->date,
            'due_time' => $this->time,
        ]);

        // Add the new task to the tasks array
        $this->tasks[] = $task;

        // Clear the task input field
        $this->task = '';
        $this->date = '';
        $this->time = '';

        session()->flash('new_todo', 'A new task has been added succesffuly');
        
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
