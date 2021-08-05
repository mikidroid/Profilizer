<?php

namespace App\Http\Livewire\Admin;
use App\Models\project;

use Livewire\Component;

class ProjectSlide extends Component
{
public $projects=[];

 public function mount(){
$Proj=array('This is the projects','project2','project3');
 $this->projects=project::orderBy('id','desc')->take(10)->get();
 }
    public function render()
    {
 
        return <<<'blade'
           <div class="card bg-light"><div class="card-body"><h4 class="card-title" id="projects"><b style=""><i class="mr-2 fa fa-folder-open" aria-hidden="true"></i>Projects </b></h4><hr/><div class="d-flex d-flex-row overflow-auto">@foreach ($projects as $project)<a class="text-dark" href="/projects/{{$project->name}}/{{$project->created_at}}/{{$project->id}}"><div class="col-4-sm"><div class="card-img-header"><img style="object-fit:cover;border:solid;border-size:2px;border-color:#fff" height="150px" width="200px" src="storage/project-img/{{$project->image_url}}"></div><div class="card-body"><h4 class="card-title mb-1">{{$project->name}}</h4><div style="width:100%" class="card-text mt-1 text-danger myTruncate2">{{$project->description}}</div><div class="" style="font-size:11px"><span style="border-radius:10px" class="bg-warning mr-1 text-dark pl-1 pr-1">Year </span><i>{{$project->year}}</i></div></div></div></a>@endforeach</div></div></div>
        blade;
        
    }
}
