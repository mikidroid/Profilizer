<div class="container">
 <div class="row">
  
 @if (Session::has('success'))
   <div class="alert alert-primary">{{Session::get('success')}}</div>
   @endif
   
@if (Session::has('error'))
   <div class="alert alert-danger">{{Session::get('error')}}</div>
   @endif
   
   
  <div class="col-sm-10">
   <div class="form-group">
 <h4 class='text-left mb-3 mt-3 bg-light'>Create Product</h4>
 </div>
 <div style="color:#575757">
  <form wire:submit.prevent="store" enctype="multipart/form-data">
   {{ csrf_field() }}
   <label for="name">Product Name</label>
   <input class="form-control mb-2 mt-0" type="text" wire:model="name">
   @error('name')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
  <label for="description"> Description</label>
   <textarea style="height:300px" class="form-control mb-2" type="text" wire:model="description"> </textarea>
   
  <label for="price" class="">Price</label>
   <input class="form-control mb-2" type="number" wire:model="price">
   
  <label for="Category" class="">Category</label>
   <input class="form-control mb-3" type="text" wire:model="category">
   
  <label for="image" class="">Select Image</label>
   <input class="form-control mb-2" name="image" type="file" wire:model="product_url">
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
 

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>

 </div>
 </div>
 </div>
</div>
