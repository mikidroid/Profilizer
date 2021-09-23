<?php

namespace App\Http\Livewire\Admin;
use App\Models\userinfo;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class EditUserInfo extends Component
{
 


 //review user-info
public $click_core_values=false;
public $click_skills=false;
public $click_bio=false;
public $click_qualifications=false;
public $click_achievements=false;

//load user-info model
public $mess=0;
public $lists="";
public $core_values;
public $skills;
public $achievements;
public $bio;
public $qualifications;
    
    public function mount(){
     $Userinfo=User::where('user_id','=','admin')->first()->userinfo()->where('id','=',1)->first();
     if($Userinfo){
       $this->lists=$Userinfo;
       $this->core_values=$Userinfo->core_values;
       $this->skills=$Userinfo->skills;
       $this->achievements=$Userinfo->achievements;
       $this->bio=$Userinfo->bio;
       $this->qualifications=$Userinfo->qualifications;
      
     }
      else{
       session()->flash('error','There was an error loading the data');
      }


    }

//rules for validating data
// protected $rules= [
//'core_values' =>'min:10',
//'skills'  =>'min:10',
//'achivements'   =>'min:10',
//'bio'   =>'min:10',
//'qualifications'  =>'min:10',
 //];
 
 //Render layout
 public function render()
    {
return view('livewire.admin.edit-user-info')->extends('layouts.adminLayout')->section('content');
    }
       // return view('livewire.admin.create-user-info')->extends('layouts.adminLayout')->section('content');
    
    
 //Update data in database
public function update(Request $request,$value){
//   $this->validate();
$Userinfo=User::where('user_id','=','admin')->first()->userinfo()->where('id','=',1)->first();

 // input generated model into input variable
 if ($value=='core_values'){
$Userinfo->core_values= '$request->core_values';$Userinfo->save();
session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
 }

if ($value=='skills'){
$Userinfo->skills= $request->skills;$Userinfo->save();
session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
}

if ($value=='achievements'){
$Userinfo->achievements= $request->achievements;$Userinfo->save();
session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
}

if ($value=='bio'){
$Userinfo->bio= $request->bio;$Userinfo->save();
session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
}

if ($value=='qualifications'){
$Userinfo->qualifications= $request->qualifications;$Userinfo->save();
session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
}

 // store generated input in userInfo model

 //Give a success message when UserInfo is created successfully
}
    //end update
    
    
    
 //validate and store data in database
 public function store(Request $request){
//   $this->validate();
 
 // input generated model into input variable
   $input = ([
           
    'core_values'=> $request->core_values,
     'skills'=> $request->skills,
       'achievements'=> $request->achievements,
       'bio'=> $request->bio,
       'qualifications'=> $request->qualifications,
       'user_id'=> 1,
          
          ]);
         
 // store generated input in userInfo model
  $Ustore = userinfo::create($input);
  
 //Give a success message when UserInfo is created successfully
   if($Ustore){
        session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/edit-user-info');
       }
       
 // Give error message when UserInfo failed to create
    else{
        session()->flash('error','Error storing user information added successfully');
                 return redirect()->to('/admin/edit-user-info');
        }
   }
 // End of store function
    
 // Begin section Toggle function
    public function click($value){
     if ($value=='core_values'){
      if(!$this->click_core_values){
           
           $this->click_core_values=true;
      }
      else{
          $this->click_core_values=false;
      }
     }
     
     
if ($value=='skills'){

  if(!$this->click_skills){

           $this->click_skills=true;
      }
      else{
          $this->click_skills=false;
      }
            }
           
           
if ($value=='bio'){
 
  if(!$this->click_bio){

           $this->click_bio=true;
      }
      else{
          $this->click_bio=false;
      }
      }
     
if ($value=='achievements'){

  if(!$this->click_achievements){
           
           $this->click_achievements=true;
           
           
      }
      else{
          $this->click_achievements=false;
      }

 }
           
           
if ($value=='qualifications'){

  if(!$this->click_qualifications){
           
           $this->click_qualifications=true;
      }
      else{
          $this->click_qualifications=false;
          }
      }
    }
    
// End Toggle check
           

   
public function show(){
     
      
      $this->mess++;
      
      
   //   $this->click_core_values="<input type='text' name='ckeditor' class='form-control' wire:model='core_values'>
 
//<button class='btn btn-primary' type='submit' >
 //  submit
//</button>";

     
    }
    
    
public function exclude($item){
 if($item=='core_values'){
$this->click_skills="";
$this->click_bio="";
$this->click_qualifications="";
$this->click_achievements="";
}

if($item=='skills'){
$this->click_core_values="";
$this->click_bio="";
$this->click_qualifications="";
$this->click_achievements="";
}

if($item=='bio'){
$this->click_skills="";
$this->click_core_values="";
$this->click_qualifications="";
$this->click_achievements="";
}

if($item=='achievements'){
$this->click_skills="";
$this->click_bio="";
$this->click_qualifications="";
$this->click_core_values="";
}

if($item=='qualifications'){
$this->click_skills="";
$this->click_bio="";
$this->click_core_values="";
$this->click_achievements="";
}

}

public function truncate(){
 userinfo::truncate();
}

public function showList(){
 $this->lists=userinfo::all();
}

}
