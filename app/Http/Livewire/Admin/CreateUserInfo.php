<?php

namespace App\Http\Livewire\Admin;
use App\Models\userinfo;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateUserInfo extends Component
{
 //review user-info
public $click_core_values="";
public $click_skills="";
public $click_bio="";
public $click_qualifications="";
public $click_achievements="";

//load user-info model
public $mess=0;

public $lists=[];
public $core_values;
public $skills;
public $achievements;
public $bio;
public $qualifications;
    

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
return view('livewire.admin.create-user-info')->extends('layouts.adminLayout')->section('content');
    }
       // return view('livewire.admin.create-user-info')->extends('layouts.adminLayout')->section('content');
    
 //validate and store data in database
 public function store(Request $request){
//   $this->validate();
 
 // input generated model into input variable
   $input = ([
           
    'core_values'=> $this->core_values,
     'skills'=> $this->skills,
       'achievements'=> $this->achievements,
       'bio'=> $this->bio,
       'qualifications'=> $this->qualifications,
       'user_id'=> $this->getAdminId(),
          
          ]);
         
 // store generated input in userInfo model
  $Ustore = userinfo::create($input);
  
 //Give a success message when UserInfo is created successfully
   if($Ustore){
        session()->flash('success','User Information added successfully');
         return redirect()->to('/admin/create-user-info');
       }
       
 // Give error message when UserInfo failed to create
    else{
        session()->flash('success','Error storing user information added successfully');
                 return redirect()->to('/admin/create-user-info');
        }
   }
 // End of store function
 // GetAdminId function
public function getAdminId(){   
    $adminId=User::where('user_id','=','admin')->first();
    return $adminId->id;
}
 // Load section function
    public function click($value){
     if ($value=='core_values'){
      
          $this->exclude($value);
           $this->click_core_values="<textarea type='text' name='core_values' id='article-ckeditor' class='form-control' wire:model='core_values'> </textarea>
  
";
           
     }
     
     
if ($value=='skills'){
$this->exclude($value);
           $this->click_skills="<input type='text' name='article-ckeditor' class='form-control' wire:model='skills'>
      
           <button class='btn btn-primary' type='submit' >
              submit
           </button>";  }
           
           
if ($value=='bio'){
 
           $this->exclude($value);
           $this->click_bio="<textarea type='text' name='bio' class='form-control' wire:model='bio'> </textarea>
      
           <button class='btn btn-primary' type='submit' >
              submit
           </button>
           "

           ;  }
     
if ($value=='achievements'){
$this->exclude($value);
           $this->click_achievements="<input type='text' name='ckeditor' class='form-control' wire:model='core_values'>
      
           <button class='btn btn-primary' type='submit' >
              submit
           </button>";  }
           
           
if ($value=='qualifications'){
$this->exclude($value);
           $this->click_qualifications="<input type='text' name='ckeditor' class='form-control' wire:model='core_values'>
      
           <button class='btn btn-primary' type='submit' >
              submit
           </button>";  }

    }
           
 // End section function  
   
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
