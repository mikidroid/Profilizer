<?php

namespace App\Http\Livewire\Articles;
use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OneArticle2 extends Component
{
 public $ArticleId;
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
 public $count=0;
 public $new;
 public $new1;
 
 
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
     
 }
     
     
     
 public function render(){
     return view('livewire.articles.one-article2')
     ->extends('layouts.app')
     ->section('content');}
     
    
public function SendComment($Article_Id,Request $request){
     $SendC=DB::insert('INSERT INTO comments (created_at,updated_at,name,content,article_id) VALUES (?,?,?,?,?)',[date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),$request->name,$request->_content,$Article_Id]);
     if($SendC){session()->flash('success','Comment added successfully!');
        return back();}
     else{session()->flash('error','Error while sending comment!');}}
       

}
