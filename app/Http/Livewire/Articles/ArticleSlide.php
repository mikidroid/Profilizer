<?php

namespace App\Http\Livewire\Articles;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ArticleSlide extends Component
{
 public $Article;
    public function mount(){
        $Article=DB::select('SELECT * FROM articles');
        $RandNum=rand(0,count($Article));
        $Rand2=1;
        $Article=DB::select
        ('SELECT * FROM articles ORDER BY RAND() LIMIT 1');
       $this->Article=$Article;
    }
    public function render()
    {
        return view('livewire.articles.article-slide');
    }
}
