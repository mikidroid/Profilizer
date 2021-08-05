
<br/>
<div class="container" >
 <div class="row">
  <div class="col-sm-12 col-md-12">
 <div class="card mt-4">
   <div class="card-body">
   <div class="card-header-img">
    <img width="100%" style="object-fit:cover" src="/storage/project-img/{{$Project->image_url}}" class="mb-3 shadow"/>
   </div>
   
<p class="card-text ml-2 mb-2 text-dark" style="font-size:10px;">Duration<span  style="border-radius:20px" class="ml-1 bg-danger text-white pl-2 pr-2">{{$Project->type}}</span></p>
<h5 class="card-title ml-2 mb-1" style="font-weight:600;">{{$Project->name}}</h5>
<h6 class="card-text p-1 mb-1"><span class="mr-1"><i>Handled by:</i></span>
   {{$ProjectAuthor}}
   </h6>

<div class="b1 bg-light p-1"><span>Project Status:</span>
@if($Project->completed)
<span class="alert-success p-1">Completed <i class="fa fa-check-circle" aria-hidden="true"></i></span>
@else
<span class="alert-danger p-1 ">In Progress..</span>
@endif
   </div>
<div class="b1 p-1"><span>Year:</span>
<?php
echo $Project->year;?>
   </div>
 <div class="b1 bg-light p-1">Description</div>
   <div class="card-text ml-2 mb-2">
    {{$Project->description}}
   </div>
   </div>
   </div>
   </div>
   
   </div>
</div>
<br/>

<!--Import Project slide-->

