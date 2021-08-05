<?php

namespace App\Http\Livewire\Admin;
use App\Models\project;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class Createproject extends Component
{
use WithFileUploads;

 public $name;
 public $description;
 public $image_url;
 public $year;
 public $i;
 public $type;
 public $completed;
 
 protected $rules=[

  ];
 
    public function render()
    {
        return view('livewire.admin.createproject')->extends('layouts.adminLayout')->section('content');
    }
    
    public function store(Request $request){
    // $this->validate();
  $this->validate([
        'name'=>'required|min:3',
 
      ]);
  
//   store image
   $imgName=time().'_'.$this->image_url->getClientOriginalName();
   $imgPath=$this->image_url->storeAs('/public/project-img',$imgName);
   $this->image_url=$imgName;
   
     $input=[
          'name'=>$this->name,
          'description'=>$this->description,
          'image_url'=>$this->image_url,
          'completed'=>$request->completed,
          'type'=>$this->type,
          'year'=>$this->year,
          'user_id'=>Auth()->user()->id
          ];
          
     $prodCreate=project::create($input);
     
     if ($prodCreate){
Session()->flash('success','Project added successfully Sam!');
    // Redirect if successfull
    return redirect()->to('admin/projects');
     }
     else{
      Session()->flash('error','something went wrong with your request.');
     }
     
    }
   
}
