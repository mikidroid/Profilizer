<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CreateReply extends Component
{
 public $cId;
 public $cName;
 public $Aname;
 public function mount($commentId){
  $this->cId=$commentId;
  if(auth()->check()){
$this->Aname=auth()->user()->name;
  }
  $this->cName=DB::select('select name from comments where id=?',[$commentId]);

 }
    public function render()
    {
     return view('livewire.articles.create-reply')->extends('layouts.app')->section('content');
    }
}
