<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    protected $listeners =['get_todos'=>'get_todo_data'];
    public function get_todo_data()
    {
        return Todo::all();
    }


    public function delete($id)
    {
        $this->emit('delete_data',$id);
    }


    public function edit($id)
    {
        $this->emit('edit_data',$id);

    }

    public function render()
    {
        $todos = $this->get_todo_data();
        return view('livewire.todo-list',compact('todos'));
    }
}
