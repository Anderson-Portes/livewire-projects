<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $todos;
    public string $title = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function createTodo()
    {
        $todo = Todo::create(['title' => $this->title, 'done' => false]);
        $this->todos->push($todo);
        $this->title = '';
    }

    public function toggleTodo($id)
    {
        $todo = Todo::find($id);
        if (!$todo) return;
        $todo->update(['done' => !$todo->done]);
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = Todo::find($id);
        if (!$todo) return;
        $this->todos = $this->todos->filter(fn (Todo $t) => $t->id != $id);
        $todo->delete();
    }

    public function selectTodos()
    {
        $this->todos = Todo::orderBy('created_at', 'desc')->get();
    }
}
