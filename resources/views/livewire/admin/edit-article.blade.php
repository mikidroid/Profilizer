<div class="container">

 <div class="row">
      <!--Flash messages -->
              @include('inc.flashMessages')
 
  <div class="col-sm-10">

   <div class="form-group">
 
 <h4 class='text-left mb-3 mt-3'>Edit Article</h4>
 <hr/>
 </div>
 <div style="color:#575757">
  <form wire:submit.prevent="update({{$article_id}})" enctype="multipart/form-data">
   {{ csrf_field() }}
   <label for="title">Title</label>
   <input class="form-control mb-2 mt-0" type="text" wire:model="title">
   @error('title')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
   
  <label for="body"> Body</label>
   <textarea class="form-control mb-2" style="height:250px" type="text" wire:model="body"></textarea>
  @error('title')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
   
  <label for="Category" class="">Category</label>
   <input class="form-control mb-3" type="text" wire:model="category">
   
  <label for="image" class="">Select Image</label>
  
  @if(isset($img_url))
  <?php
  $path1=time().'_'.$img_url->getClientOriginalName();
  $temp_img_url=$path1;
  ?>
<div class="alert alert-primary">
 <p class="card-text"> <span class="mr-1">Your image</span>
 <?php echo $temp_img_url ?> <span class="ml-1">has been Uploaded! </span></p>
 </div>
  
  @else
<img height="250px" width="300px" style='object-fit:cover' src="/storage/article-img/{{$temp_img_url}}">
  @endif
  
<input class="form-control-file mb-2 mt-2" name="image" type="file" wire:model="img_url">
<div wire:loading wire:target="img_url" class="text-sm italic text-gray-500">Uploading...</div>
                </div>
@error('img_url')
   <div class="alert alert-danger">{{$message}}</div>
@enderror
   
  <button type="submit" class="form-control btn btn-primary">
      Add
  </button>
   
</form>
  
<hr/>


 <a href="/admin/articles" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
 </div>
 </div>
 </div>
</div>

