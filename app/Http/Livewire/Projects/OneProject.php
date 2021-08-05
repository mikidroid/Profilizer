<?php

namespace App\Http\Livewire\Projects;
use App\Models\project;
use Livewire\Component;

class OneProject extends Component
{
 
public $Project;
 public $ProjectAuthor;
 
    public function mount($id){
     $this->Project=project::find($id);
     $this->ProjectAuthor=project::find($id)->user->name;
     }
     
    public function render()
    {
        return view('livewire.projects.one-project')
        ->extends('layouts.app')->section('content');
    }
}
