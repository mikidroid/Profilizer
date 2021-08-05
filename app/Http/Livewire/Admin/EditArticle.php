<?php

namespace App\Http\Livewire\Admin;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use App\Constants;
use Illuminate\Support\Str;

class EditArticle extends Component{
use WithFileUploads;
 //To set default constants
 public $MyCode=array('..','h<','>h','i<','>i','l<','>l');
 public $MyHtml=array('.<p style="line-height:1em;"></p>',
   '<h5>',
   '</h5><p style="line-height:1em;"></p>',
   '<img src="',
   '" width="100%" height="200px" style="object-fit:cover"/><p style="line-height:1em;"></p>',
   '<a href="',
   '"></a>');
 public $title;
 public $body;
 public $img_url;
 public $temp_img_url;
 public $category;
 public $i;
 public $article_id;
 public $SS;
 //To set rules for validation
 protected $rules=[
'name'=>'required|min:3',
'Article_url'=>'image|2048'
  ];
 // To mount default values from database
 public function mount($id){
        $P=Article::find($id);
        $this->title=$P->title;
        //Replace back to Droid code
        $this->body=Str::replace
        ($this->MyHtml,$this->MyCode,$P->body);
        $this->temp_img_url=$P->img_url;
        $this->category=$P->category;
        $this->article_id=$P->id;
        $this->SS=url()->full();
 }
 //To render the component
 public function render(){
        return view('livewire.admin.edit-article')
        ->extends('layouts.adminLayout')
        ->section('content');}
 // To Update database 
 public function update(Request $request,$article_id){
        $this->validate([
         'title'=>'required|min:3']);
  //Check if Article url is set
  if(isset($this->img_url)){
   //To check first if file exists before unlinking
 //Note: S::S is a laravel constant i made for 
         //storage path. located at App\Constants, i made 
         //an alias too for it located at Config\App
   if(file_exists('storage/article-img/'.$this->temp_img_url)){
      unlink('storage/article-img/'.$this->temp_img_url);}
  // Continue image update process after check
  $imgName=time().'_'.$this->img_url->getClientOriginalName();
  $imgPath=$this->img_url->storeAs('public/article-img',$imgName);
  $this->img_url=$imgName;}
  // Use tempoary image_url if no image selected
  else{
   $this->img_url=$this->temp_img_url;}
 // Assign inputs to be used for update 
 $this->body=Str::replace
   ($this->MyCode,$this->MyHtml,$this->body);
 
 $input=[
   'title'=>$this->title,
   'body'=>$this->body,
   'img_url'=>$this->img_url,
   'category'=>$this->category,
   'user_id'=>Auth()->user()->id];
 //Update database using assigned inputs
 $prodUpdate=Article::find($article_id)->update($input);
  // On success update show message
  if ($prodUpdate){
    Session()->
    flash('success','Article edited successfully!');
    // Redirect if successfull
    return redirect()->to('/admin/articles');}
  // On update failure. Show error message
  else{
    Session()->
    flash('error','something went wrong with your request.');}
 } //End Update function
    
} // End class
