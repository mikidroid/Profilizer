<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Projects extends Component
{
 
use WithPagination;
 
public $i=1;
 
// Delete Function
public function delete($id){
        $deleteProject=project::find($id);
        $img=$deleteProject->image_url;
        $pathToDelete='storage/project-img/'.$img;
// Check if file exists to delete
  if(file_exists($pathToDelete)){
        unlink($pathToDelete);
        $successDelete=$deleteProject->delete();
   //If it deletes successfully, flash success
   if($successDelete){
         session()->flash('success','item deleted!');}
   //If it doesnt delete successfully, flash error
   else{
         session()->flash('error','Failure deleting item!');}
  } //End 'If File Exists'
  //If File doesnt Exist, skip deletion of file
  else{
       $successDelete=$deleteProject->delete();
   //if it deletes successfully flash success
   if($successDelete){
        session()->flash('success','item deleted!');}
   //If it doesnt delete successfully flash error
   else{
        session()->flash('error','Failure deleting item!');}
      } //End If 'File doesnt Exist'
}//End Delete function

// Render View 
// The model was added directly to the view because i 
// faced pagination error in this livewire component.
    public function render(){
        return view('livewire.admin.projects',['Projects'=>project::orderBy('id','desc')->paginate(8)])->extends('layouts.adminLayout')->section('content'); }
}
