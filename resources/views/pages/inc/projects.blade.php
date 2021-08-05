
 <div class="card bg-light">
  <div class="card-body">
 <h4 class="card-title" id="projects"><b style=""><i class="mr-2 fa fa-folder-open" aria-hidden="true"></i>Projects </b></h4>
 <hr/>
 <div class="d-flex d-flex-row justify-items-center overflow-auto">
 @foreach ($projects as $project)
  <div class="col-4-sm">
   <div class="card-body">
    <h4 class="card-title">
     {{$project}}
    </h4>
   </div>
  </div>
 @endforeach
</div>
   </div>
   </div>