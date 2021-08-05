<div class="container">
 <div class="row">
  
 
      <!--Flash messages -->
              @include('inc.flashMessages')
   
  <div class="col-sm-10">
   <div class="form-group">
 <h5 class='text-left mb-3 mt-3'>Edit Project</h5>
 </div>
 <div style="color:#575757">
  <form wire:submit.prevent="update({{$Pro_id}})" enctype="multipart/form-data">
   {{ csrf_field() }}
   <label for="name">Name</label>
   <input class="form-control mb-2 mt-0" type="text" wire:model="name" value="{{$name}}">
   @error('name')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
  <label for="description"> Description</label>
   <textarea style="height:300px" class="form-control mb-2" type="text" wire:model="description">{{$description}}</textarea>
   
   
  <label for="image" class="">Select Image</label>
  
  @if(isset($image_url))
  <?php
  $path1=time().'_'.$image_url->getClientOriginalName();
  $temp_image_url=$path1;
  ?>
<div class="alert alert-primary">
 <p class="card-text"> <span class="mr-1">Your image</span>
 <?php echo $temp_image_url ?> <span class="ml-1">has been Uploaded! </span></p>
 </div>
  
  @else
<img height="250px" width="300px" style='object-fit:cover' src="/storage/project-img/{{$temp_image_url}}">
  @endif
  
   <input class="form-control mb-2" name="image" type="file" wire:model="image_url" >
<div wire:loading wire:target="image_url" class="text-sm italic text-gray-500">Uploading...</div>
                </div>
@error('image')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
   
  <label for="year" class="">Year</label>
   <input class="form-control mb-3" type="text" wire:model="year" value="{{$year}}">
   
   
  <label for="type" class="">Project Type: </label>
   <select class="form-control mb-3" type="text" name="type" wire:model="type" value="{{$type}}">
  <option>Select</option>
    <option>Short Term</option>
    <option>Long Term</option>
    </select>
    
    <hr/>
    
    <div class="item-justify-center">
   <label for="Complete" class=""> <div class="">Completed</div></label>   <input name="completed" value="{{$completed}}" class="form-control-checkbox ml-1" type="checkbox" wire:model="completed">
   </div>
  
  
   <button type="submit" class="form-control btn btn-primary">
    Update Project
   </button>
   
  </form>
  
  
  <hr/>
  
   <a href="/admin/projects" type="submit" class=" btn btn-danger">
    Go Back
   </a>

  
 </div>
 </div>
 </div>
</div>

