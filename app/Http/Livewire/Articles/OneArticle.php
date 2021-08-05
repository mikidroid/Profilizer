<?php

namespace App\Http\Livewire\Articles;
use Livewire\Component;
use App\Models\Article;
use App\Models\comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class OneArticle extends Component
{
use WithPagination;
 public $ArticleId;
 public $ArtId;
 public $CommentName;
 public $_name;
 public $content;
 public $_Comments;
 public $ReplyClick=false;
 public $CommentId;
 public $_Replies;
 public $reply_name;
 public $reply_content;
 public $Article;
 public $ArticleAuthor;
 public $Comment_tempId;
 public $Comment_tempN;
 
 
 public $butt=0;
 public $show=false;
    
    
    public function clicked(){
     $this->butt++;
    }
    
public function clicked2(){
 switch($this->show){
     case true:
      $this->show=false;break;
  case false:
   $this->show=true;break;
    }
}
 
 
 public function mount($id){
     $this->Article=Article::find($id);
     $this->ArticleAuthor=Article::find($id)->user->name;
     if(auth()->check()){$this->_name=auth()->user()->name;}
    $this->_Comments=DB::select('SELECT articles.*,comments.* FROM comments INNER JOIN articles ON comments.article_id=articles.id WHERE comments.article_id=?',[$id]);
    
    $this->ArtId=$id;
 }
     
     
     
 public function render(){
     return view('livewire.articles.one-article')
     ->extends('layouts.app')
     ->section('content');}
     
    
public function SendComment($Article_Id,Request $request){
     $SendC=DB::insert('INSERT INTO comments (created_at,updated_at,name,content,article_id) VALUES (?,?,?,?,?)',[date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$request->name,$request->_content,$Article_Id]);
     if($SendC){session()->flash('success','Comment added successfully!');
        return back();}
     else{session()->flash('error','Error while sending comment!');}}
       
public function SendReply($Comment_Id,Request $request){
     $SendC=DB::insert('INSERT INTO replies (created_at,updated_at,name,content,comment_id) VALUES (?,?,?,?,?)',[date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$request->name,$request->_content,$Comment_Id]);
$a=DB::select('SELECT articles.*,comments.* FROM comments INNER JOIN articles ON comments.article_id=articles.id WHERE comments.id=?',[$Comment_Id]);
     if($SendC){session()->flash('success','Reply added successfully!');
        return back();}
     else{session()->flash('error','Error while sending comment!');}}
}
