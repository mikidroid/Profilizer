<br/>
<div class="container" >
 <div class="row">
  <div class="col-sm-12 col-md-12">
 <div class="card mt-4">
   <div class="card-body">
   <div class="card-header-img">
    <img width="100%" style="object-fit:cover" src="/storage/article-img/{{$Article->img_url}}" class="mb-3 shadow"/>
   </div>
   
<p class="card-text ml-2 mb-2 text-white" style="font-size:10px;"><span  style="border-radius:20px" class="bg-danger pl-2 pr-2">{{$Article->category}}</span></p>
<h4 class="card-title ml-2 mb-1" style="font-weight:600;">{{$Article->title}}</h4>
<h6 class="card-text p-1 mb-1"><span class="mr-1"><i>Written by:</i></span>
   {{$ArticleAuthor}}
   </h6>

   
<div class="b1 bg-light p-1"><span>Added On:</span>
<?php
echo date("jS F, Y", strtotime($Article->created_at));?>
   </div>
   <div class="card-text ml-2 mb-2 mt-2">
    {!!$Article->body!!}
   </div>
   </div>
   </div>
   </div>
   
   </div>
</div>
<br/>


  
<!--Import comments -->
@include('livewire.articles.comments')


<div>
<button class="btn btn-primary" wire:click="clicked">click</button>
<h3>{{$butt}}</h3>

<button class="btn btn-primary" wire:click="clicked2">click2</button>
@if($show==true)
<h3>Hello, livewire is working!</h3>
<div></div>
@endif
</div>



 
 
 