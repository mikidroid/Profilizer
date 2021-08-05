<?php
namespace App\Http\Livewire\Admin;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreateArticle extends Component{
use WithFileUploads;
 // Constants for input
 public $title;
 public $body;
 public $img_url;
 public $category;
 public $i;
 // Rules for validation
 protected $rules=[
   'name'=>'required|min:3',
   'img_url'=>'image|2048'];
   
 //Render the component
 public function render(){
   return view('livewire.admin.create-article')
   ->extends('layouts.adminLayout')
   ->section('content');}
   
 //Store function To create data into database
 public function store(Request $request){
   //Validate input
   $request->validate([
    'title'=>'required|min:3',
    'img_url'=>'required|image|mimes:jpg,png,gif|max:1024']);
   //store image
   $imgName=time().'_'.$request
   ->img_url->getClientOriginalName();
   $imgPath=$request->file('img_url')
   ->storeAs('public/article-img',$imgName);
   $this->img_url=$imgName;
   //My Text editor
   $MyCode=array('..','h<','>h','i<','>i','l<','>l');
   $MyHtml=array('.<p style="line-height:1em;"></p>',
   '<h5>',
   '</h5><p style="line-height:1em;"></p>',
   '<img src="',
   '" width="100%" height="200px" style="object-fit:cover"/><p style="line-height:1em;"></p>',
   '<a href="',
   '"></a>');
   
   $this->body=Str::replace
   ($MyCode,$MyHtml,$request->body);
   //Creating Input model for database
   $input=[
      'title'=>$request->title,
      'body'=>$this->body,
      'img_url'=>$this->img_url,
      'category'=>$request->category,
      'user_id'=>Auth()->user()->id];
   //Create Article from input       
   $prodCreate=Article::create($input);
   //If Create is successful
   if ($prodCreate){
     //flash success message
     Session()
     ->flash('success','Article added successfully!');
     return redirect()->to('/admin/articles');}
   //If create is unsuccessful
   else{
      //Flash error message
     Session()
     ->flash('error','something went wrong with your request.');}
    } 
  //End store function
}
