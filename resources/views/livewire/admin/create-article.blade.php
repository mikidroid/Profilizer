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
 <h4 class='text-left mb-3 mt-3 bg-light'>Create Article</h4>
 </div>
 <div style="color:#575757">
  <form action="/admin/create-article/store" method="POST" enctype="multipart/form-data">
   {{ csrf_field() }}
<input name="htmlcode" id="inp_htmlcode" type="hidden" />
   
   <label for="title">Title</label>
   <input class="form-control mb-2 mt-0" type="text" name="title" wire:model="title">
   @error('title')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
  <label for="body"> Body</label>
   <textarea style="height:300px" class="form-control mb-2" type="text" name="body" id="inp_edtor1" wire:model="body"> </textarea>
 @error('body')
   <div class="alert alert-danger">{{$message}}</div>
 @enderror
   
  <label for="Category" class="">Category</label>
   <input class="form-control mb-3" name="category" type="text" wire:model="category">
   
  <label for="image" class="">Select Image</label>
   <input class="form-control-file mb-2" name="img_url" type="file" wire:model="img_url">
<div wire:loading wire:target="img_url" class="text-sm italic text-gray-500">Uploading...</div>
                </div>
@error('img_url')
   <div class="alert alert-danger">{{$message}}</div>
   @enderror
   
   
   
   
<script>
				var editor1 = new RichTextEditor(document.getElementById("inp_editor1"));
				editor1.attachEvent("change", function () {
					document.getElementById("inp_htmlcode").value = editor1.getHTMLCode();
				});
			</script>
   
   
   
<button type="submit" class="form-control btn btn-primary">
    Add Article
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

