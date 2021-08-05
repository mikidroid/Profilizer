<div class="container">
 <h3 class="mt-3 p-1 ml-0 text-dark "><b>Products</b></h3>
 <div class="row">
  <div class="col-sm-12 col-md-8">
   <div style="width:100%">
   <!-- Loop the products -->
   @foreach($ProductList as $PL)
    <div style="width:50% ;float:left" class="p-2">
     <div class="card p-2">
      <div class="card-header-img"><a class="text-dark" href="/products/{{$PL->name}}/{{$PL->name}}/{{$PL->id}}">
        <img src="/storage/product-img/{{$PL->product_url}}" 
        width="100%" height="250" style="object-fit:cover;">
      </div>
      <div class="card-body">
       <h5 class="card-title ml-1 mb-1" style="font-weight:600;">{{$PL->name}}</h5>
       <div class="card-text ml-1 mb-2 myTruncate1" 
       style="width:100px">
       {{$PL->description}}
       </div>
       <h3 class="card-title ml-1 mb-1 bg-warning p-2 rounded-circle"><b>N{{number_format($PL->price)}}</b></h3>
      </div>
     </div>
   </div>
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

