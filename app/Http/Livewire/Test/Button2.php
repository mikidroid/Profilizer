<?php

namespace App\Http\Livewire\Test;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Article;

class Button2 extends Component
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
    public function render()
    {
        return view('livewire.test.button2')->extends('layouts.adminLayout')->section('content');
    }
    
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
}}
