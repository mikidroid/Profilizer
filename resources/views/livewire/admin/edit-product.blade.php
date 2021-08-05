<div class="container">
 <div class="row">

      <!--Flash messages -->
              @include('inc.flashMessages')
  <div class="col-sm-10">
   <div class="form-group">
 <h4 class='text-left mb-3 mt-3'>Edit Product</h4>
 <hr/>
 </div>
 <div style="color:#575757">
  <form wire:submit.prevent="update({{$prod_id}})" enctype="multipart/form-data">
   {{ csrf_field() }}
   <label for="name">Name</label>
   <input class="form-control mb-2 mt-0" type="text" wire:model="name">
   @error('name')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
  <label for="description"> Description</label>
   <input style="height:300px" class="form-control mb-2" type="text" wire:model="description">
   
  <label for="price" class="">Price</label>
   <input class="form-control mb-2" type="number" wire:model="price">
   
  <label for="Category" class="">Category</label>
   <input class="form-control mb-3" type="text" wire:model="category">
   
  <label for="image" class="">Select Image</label>
  
  @if(isset($product_url))
  <?php
  $path1=time().'_'.$product_url->getClientOriginalName();
  $temp_product_url=$path1;
  ?>
<div class="alert alert-primary">
 <p class="card-text"> <span class="mr-1">Your image</span>
 <?php echo $temp_product_url ?> <span class="ml-1">has been Uploaded </span></p>
 </div>
  
  @else
<img height="250px" width="300px" style='object-fit:cover' src="/storage/product-img/{{$temp_product_url}}">
  @endif
  
<input class="form-control mb-2 mt-2" name="image" type="file" wire:model="product_url">
<div wire:loading wire:target="product_url" class="text-sm italic text-gray-500">Uploading...</div>
                </div>
@error('image')
   <div class="alert alert-danger">{{$message}}</div>
@enderror
   
<label for="payment_url" class="">Payment link</label>
<input class="form-control mb-3" type="text" wire:model="payment_url">
  <button type="submit" class="form-control btn btn-primary">
      Add
  </button>
   
</form>
  
<hr/>

 <a href="/admin/products" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
 
 </div>
 </div>
 </div>
</div>
