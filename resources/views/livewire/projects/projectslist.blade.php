<div class="container">
 <h3 class="mt-3 p-1 ml-0 text-dark "><b>Projects</b></h3>
 <div class="row">
  <div class="col-sm-12 col-md-8">
   <div style="width:100%">
   <!-- Loop the Projects -->
   @foreach($ProjectsList as $PL)
   <a class="text-dark" href="/projects/{{$PL->name}}/{{$PL->created_at}}/{{$PL->id}}">
    <div style="width:50% ;float:left" class="p-2">
     <div class="card p-2">
      <div class="card-header-img">
        <img src="/storage/project-img/{{$PL->image_url}}" 
        width="100%" height="250" style="object-fit:cover;">
      </div>
      <div class="card-body">
       <h5 class="card-title ml-1 mb-1" style="font-weight:600;">{{$PL->name}}</h5>
       
<div class="b1 bg-light p-1"><span>Status:</span>
@if($PL->completed)
<span class="alert-success p-1">Completed</span>
@else
<span class="alert-danger p-1 ">In Progress..</span>
@endif
   </div>

       <div class="card-text ml-1 mb-2 myTruncate1" 
       style="width:100px">
       {{$PL->description}}
       </div>
       
      </div>
     </div>
   </div></a>
   <!--End Loop -->
   @endforeach
  </div>
  </div>
  
  <!-- New column (sidebar) -->
  <div class="col-md-4 col-sm-12">
    
  </div>
 </div>
<!-- End container -->
</div>

