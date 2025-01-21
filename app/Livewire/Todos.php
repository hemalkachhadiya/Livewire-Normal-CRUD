<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    
    public $todo = '';

    public $todos = ['who cares'];
    public $errorMessage = ''; 
    // public function mount(){
    //     $this->todos = [
    //         'Take Out Trash',
    //         'Do Wishes',
    //     ];

    //     $this->todo = 'Type Todo.........';
    // }



    public function add(){
        if ($this->todo == '') {
            $this->errorMessage = 'Please provide a valid todo.'; // Set the error message
            return; // Don't add to the list if the todo is empty
        }
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
