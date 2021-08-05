<?php

namespace App\Http\Livewire\Inc;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Announcement extends Component
{
 public $An;
    public function mount(){
       $this->An=DB::select('select * FROM announcements ORDER BY id desc LIMIT 1');
    }
 
    public function render()
    {
        return <<<'blade'
          <div class="d-flex bg-dark container-fluid" style="height:30px;max-width:100%"><div class="p-1 ml-1 bg-danger pl-2 text-white" style="display:inline;width:25%"><i class="mr-1 fa fa-bullhorn" aria-hidden="true"></i><b>Tweets</b></div><div class="d-flex row overflow-auto ml-1 mt-1" style="width:70%"><marquee class="" direction="left">@if($An)<span class="mt-3 ml-4 text-white" ><span class="mr-2" style="font-weight:600">{{$An[0]->subject ??''}}#</span><span>{{$An[0]->body ??''}}</span></span>@endif</marquee> </div></div>
        blade;
    }
}
