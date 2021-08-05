<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Projectslist extends Component
{
public $ProjectsList;
    public function mount(){
      $this->ProjectsList=DB::select('select * FROM projects');}
 
    public function render()
    {
        return view('livewire.projects.projectslist')
        ->extends('layouts.app')
        ->section('content');
    }
}
