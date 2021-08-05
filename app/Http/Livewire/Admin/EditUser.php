<?php

namespace App\Http\Livewire\Admin;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class EditUser extends Component{
 public $User;
 public $name;
 public $user_id;
 public $user_type;
 public $email;
  //Mount the component
  public function mount($id){
    $User = User::find($id);
    $this->User=$User;
    $this->name=$User->name;
    $this->user_id=$User->user_id;
    $this->user_type=$User->user_type;
    $this->email=$User->email;}
  //Render the component
  public function render(){
    return view('livewire.admin.edit-user')
    ->extends('layouts.adminLayout')
    ->section('content');}
  //Function to update user  
  public function update($id){
    //Query to update user
    $UpdateUser=DB::update
     ('UPDATE users SET name=?,user_id=?,user_type=?,email=? WHERE id=?',[$this->name,$this->user_id,$this->user_type,$this->email,$id]);
    //Give feedback message if data uploaded
    switch(true){
     case ($UpdateUser>=1):
      session()->flash('success','User Updated Successfully!'.$UpdateUser);break;
    //Give error if data isnt uploaded
     case ($UpdateUser<=0):
      session()->flash('error','Nothing to Update!');break;
     case(!isset($UpdateUser)):
      session()->flash('error','Something went wrong!');
     }      //End switch
  } //End update function
    
}
