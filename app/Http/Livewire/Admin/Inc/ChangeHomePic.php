<?php

namespace App\Http\Livewire\Admin\Inc;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChangeHomePic extends Component{
use WithFileUploads;
 public $Pic;
    //Change Pic function
    public function ChangePic(){
     $this->validate([
      'Pic'=>'required|image|max:1024|mimes:jpg,png,gif',]);
      $PrevPath='storage/core/homePersonalPic.jpg';
      if(file_exists($PrevPath)){
       unlink($PrevPath);
       $Pic=$this->Pic->storeAs('public/core','homePersonalPic.jpg');
       if($Pic){
        session()->flash('success','Home picture changed!');}
       else{session()->flash('error','Error changing home pic!');}
      } // End file exist If
      //Perform this if there is no file yet.
      else{
       $Pic=$this->Pic->storeAs('public/core','homePersonalPic.jpg');
       if($Pic){
        session()->flash('success','Home picture changed!');}
       else{
        session()->flash('error','Error changing home pic!');}}
    } // End change pic function
    
    public function render(){
        return view('livewire.admin.inc.change-home-pic');}
}
