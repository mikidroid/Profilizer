<?php

namespace App\Http\Livewire\Articles;
use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Articleslist extends Component{
 public $ArticleList;
    public function mount(){
      $this->ArticleList=DB::select('select * FROM articles');}
      
    public function render(){
        return view('livewire.articles.articles')
        ->extends('layouts.app')
        ->section('content');}
}
