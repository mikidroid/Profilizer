<br/>
<br/>
<div class="container" >
 <div class="row">
  <div class="col-sm-12 col-md-12">
 <div class="card mt-4">
   <div class="card-body">
   <div class="card-header-img">
    <img width="100%" style="object-fit:cover" src="/storage/product-img/{{$Product->product_url}}" class="mb-3 shadow"/>
   </div>
   
<p class="card-text ml-2 mb-2 text-white" style="font-size:10px;"><span  style="border-radius:20px" class="bg-danger pl-2 pr-2">{{$Product->category}}</span></p>
<h5 class="card-title ml-2 mb-1" style="font-weight:600;">{{$Product->name}}</h5>
<h6 class="card-text p-1 mb-1"><span class="mr-1"><i>Owner:</i></span>
   {{$ProductAuthor}}
   </h6>
<h3 class="card-title ml-2 mb-1"><b>N{{number_format($Product->price)}}</b></h3>
<div class="b1 bg-light p-1">Description</div>
   <div class="card-text ml-2 mb-2">
    {{$Product->description}}
   </div>
   
<div class="b1 bg-light p-2">Payment</div>
   <div class="card-text ml-0 mb-2">
   <a class="btn btn-block btn-primary"href="{{$Product->payment_url}}" >Purchase</a>
   </div>
   
<div class="b1 bg-light p-1">Date Added</div>
   <div class="card-text ml-2 mb-2">
<?php
echo date("jS F, Y", strtotime($Product->created_at));?>
    
   </div>
   </div>
   </div>
   </div>
   
   </div>
</div>
<br/>

<!--Import product slide-->

