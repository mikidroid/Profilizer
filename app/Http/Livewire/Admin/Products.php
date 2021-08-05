<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Products extends Component
{
 
use WithPagination;
 
public $i=1;
 
// Delete Function
public function delete($id){
        $deleteProduct=product::find($id);
        $img=$deleteProduct->product_url;
        $pathToDelete='storage/product-img/'.$img;
// Check if file exists to delete
  if(file_exists($pathToDelete)){
        unlink($pathToDelete);
        $successDelete=$deleteProduct->delete();
   //If it deletes successfully, flash success
   if($successDelete){
         session()->flash('success','item deleted!');}
   //If it doesnt delete successfully, flash error
   else{
         session()->flash('error','Failure deleting item!');}
  } //End 'If File Exists'
  //If File doesnt Exist, skip deletion of file
  else{
       $successDelete=$deleteProduct->delete();
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
        return view('livewire.admin.products',['Products'=>product::orderBy('id','desc')->paginate(8)])->extends('layouts.adminLayout')->section('content'); }
}
