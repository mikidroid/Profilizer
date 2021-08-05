<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use App\Models\project;
use Livewire\Component;
use Illuminate\Http\Request;

class EditProject extends Component
{
 
use WithFileUploads;

 public $name;
 public $description;
 public $image_url;
 public $temp_image_url;
 public $year;
 public $type;
 public $completed;
 public $temp_completed;
 public $i;
 public $Project;
 public $Pro_id;
    
    public function mount($id){
         $P=project::find($id);
         $this->Pro_id=$id;
         $this->name=$P->name;
         $this->description=$P->description;
         $this->temp_image_url=$P->image_url;
         $this->completed=$P->completed;
         $this->type=$P->type;
         $this->year=$P->year;
         
    }
 
    public function render()
    {
        return view('livewire.admin.edit-project')->extends('layouts.adminLayout')->section('content');
    }
    
    public function update($id,Request $request)
    {

     // $this->validate();
     $this->validate([
        'name'=>'required|min:3', ]);
  
  //Check if project url is set
  if(isset($this->image_url)){
   //To check first if file exists before unlinking
   if(file_exists('storage/project-img/'.$this->temp_image_url)){
      unlink('storage/project-img/'.$this->temp_image_url);}
  // Continue image update process after check
  $imgName=time().'_'.$this->image_url->getClientOriginalName();
  $imgPath=$this->image_url->storeAs('public/project-img',$imgName);
  $this->image_url=$imgName;}
  // Use tempoary image_url if no image selected
  else{
   $this->image_url=$this->temp_image_url;}
  
 // Assign inputs to be used for update 
     $input=[
          'name'=>$this->name,
          'description'=>$this->description,
          'image_url'=>$this->image_url,
          'year'=>$this->year,
          'completed'=>$this->completed,
          'type'=>$this->type,
          'user_id'=>Auth()->user()->id
          ];
          
     $prodCreate=project::find($id)->update($input);
     
     if ($prodCreate){
Session()->flash('success','Project added successfully Sam!');
 
    // Redirect if successfull
    return redirect()->to('admin/projects');}
  // On update failure. Show error message

     
     else{
      Session()->flash('error','something went wrong with your request.');
     }
     
    
   }
}
