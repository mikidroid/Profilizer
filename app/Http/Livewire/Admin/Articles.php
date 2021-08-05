<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Articles extends Component
{
 
use WithPagination;
 
public $i=1;
 
// Delete Function
public function delete($id){
        $deleteArticle=Article::find($id);
        //Get and Delete image first
        $img=$deleteArticle->img_url;
         //Note: S::S is a laravel constant i made for 
         //storage path. located at App\Constants, i made 
         //an alias too for it located at Config\App
        $pathToDelete='storage/article-img/'.$img;
// Check if file exists to delete
  if(file_exists($pathToDelete)){
        unlink($pathToDelete);
        $successDelete=$deleteArticle->delete();
   //If it deletes successfully, flash success
   if($successDelete){
         session()->flash('success','item deleted!');}
   //If it doesnt delete successfully, flash error
   else{
         session()->flash('error','Failure deleting item!');}
  } //End 'If File Exists'
  //If File doesnt Exist, skip deletion of file
  else{
       $successDelete=$deleteArticle->delete();
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
        return view('livewire.admin.articles',['Articles'=>Article::orderBy('id','desc')->paginate(8)])->extends('layouts.adminLayout')->section('content'); }
        
        
        
}

