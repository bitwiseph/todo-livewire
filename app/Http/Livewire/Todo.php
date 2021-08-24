<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public $title,$description,$message,$action='Save',$seletedId;
    protected $listeners =['edit_data'=>'edit','delete_data'=>'delete'];


    protected $rules = [
        'title'=>'required|unique:todos',
        'description'=>'required',
    ];


    public function edit($id)
    {
        $todo = ModelsTodo::find($id);
        $this->title= $todo->title;
        $this->description= $todo->description;
        $this->action='Update';
        $this->seletedId= $id;
    }


    public function delete($id)
    {
        $todo = ModelsTodo::find($id);
        $todo->delete();
        $this->emit('get_todos');
    }


    public function save_todo()
    {

        if($this->action=='Update'){
            $todo = ModelsTodo::find($this->seletedId);
            $todo->title=$this->title;
            $todo->description= $this->description;
            $todo->update();
            $this->form_reset();
            $this->emit('get_todos');
        }else{
            $this->validate();
            ModelsTodo::create($this->validate());
            $this->form_reset();
            $this->message="Todo has been successfully saved!";
            $this->emit('get_todos');
        }

    }

public function form_reset()
{
    $this->title= '';
    $this->description= '';
}

    public function render()
    {  // $this->todo ="Title from todo";
        return view('livewire.todo');
    }
}
