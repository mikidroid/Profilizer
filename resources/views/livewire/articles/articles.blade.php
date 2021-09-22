<div class="container">
 <h3 class="mt-3 p-1 ml-0 text-dark "><b>Articles{{Auth::user()->id}}</b></h3>
 <div class="row">
  <div class="col-sm-12 col-md-8">
   <div style="width:100%">
   <!-- Loop the Articles -->
   @foreach($ArticleList as $PL)
   <a class="text-dark" href="/articles/{{$PL->title}}/{{$PL->created_at}}/{{$PL->id}}">
    <div style="width:50% ;float:left" class="p-2">
     <div class="card p-2">
      <div class="card-header-img">
        <img src="/storage/article-img/{{$PL->img_url}}" 
        width="100%" height="250" style="object-fit:cover;">
      </div>
      <div class="card-body">
       <h5 class="card-title ml-1 mb-1" style="font-weight:600;">{{$PL->title}}</h5>
       <div class="card-text ml-1 mb-2 myTruncate1" 
       style="width:100px">
       {{$PL->body}}
       </div>
       
<div class="b1 bg-light p-1"><span class="pl-1 pr-1 alert-primary">Added On:</span>
<?php
echo date("jS F, Y", strtotime($PL->created_at));?>
   </div>
   
<div class="b1 bg-light p-1"><span class="pl-1 pr-1 alert-primary">Comments:</span>
<?php
$Cm=DB::select('select * FROM comments WHERE article_id=?',[$PL->id]);

echo count($Cm);?>
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

