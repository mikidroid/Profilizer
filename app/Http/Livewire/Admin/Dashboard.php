<?php

namespace App\Http\Livewire\Admin;
use App\Models\project;
use App\Models\Article;
use App\Models\product;
use App\Models\User;
use App\Models\comment;
use App\Models\reply;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class Dashboard extends Component{
use WithPagination;
use WithFileUploads;
 //Constants
 public $projects;
 public $articles;
 public $comments;
 public $replies;
 public $products;
 public $i=1;
 public $articlesCount;
 public $article;
 public $AnSubject;
 public $AnBody;
 public $Logo;
 
 //Mount variables from database
 public function mount(){
   $this->projects=project::all();
   //Add actual comments with replies to give total
   $this->comments=comment::all()
   ->count()+reply::all()->count();
   $this->articles=Article::all();
   $this->products=product::all();
   $this->articlesCount=$this->articles->count();}
   
 //Render component
 public function render(){
   return view('livewire.admin.dashboard',
   ['Users'=>User::orderBy('id','desc')->paginate(5),
     'Article'=>Article::find($this->articlesCount)])
   ->extends('layouts.adminLayout')
   ->section('content');}
   
 //Send announcement to homepage  
 public function SendAnnounce(){
   $createAn=DB::insert("INSERT INTO announcements (subject,body,user_id) VALUES (?,?,?)",[$this->AnSubject,$this->AnBody,auth()->user()->id]);
   if($createAn){
     session()->flash('success','You just made an Announcement!');
     return back();}
   else{session()->flash('error','You couldnt make an Announcement!');}}
   
 //Clear announcements 
 public function ClearAnnounce(){
   $ClearAn=DB::delete("DELETE FROM announcements");
   if($ClearAn){
     session()->flash('success','You just cleared the Announcements!');
     return back();}
   else{session()->flash('error','You couldnt clear Announcement!');}
 }
 
 //Change logo 
 public function ChangeLogo(){
   $this->validate([
    'Logo'=>'required|image|mimes:jpg,png,gif|max:1028']);
   $LogoPath='storage/core/Logo.png';
   if(isset($this->Logo)){
     if (file_exists($LogoPath)) {
       session()->flash('success','File exists!');
       unlink($LogoPath);
       $successChange=$this->Logo
       ->storeAs('public/core/','Logo.png');
       session()->flash('success','Logo has been changed');} 
     else {
        session()->flash('error','File does not match');
       $successChange=$this->Logo
       ->saveAs('public/core/','Logo.png');
       session()->flash('success','Logo has been changed');}
        }
   
 }
 
}
