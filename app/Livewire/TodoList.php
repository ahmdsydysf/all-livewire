<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TodoList extends Component
{
    #[Rule('required|min:2|string')]
    public $name;
    #[Rule('required|in:Low,Middle,High')]
    public $priority;

    public function addNewTask()
    {
        $validated = $this->validate();

        Todo::create($validated);

        $this->reset('name', 'priority');

        session()->flash('success', 'Created ..');
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
