<div class="container mt-2 mb-4">
 @include('inc.flashMessages')
 <h4>Change Home Picture</h4>
 <form wire:submit.prevent="ChangePic" enctype="multipart/form-data">
  <img src="/storage/core/homePersonalPic.jpg" class="mt-2 mb-2" width="150px" height="auto">
  <input type="file" class="mb-2 form-control-file" name="Pic" wire:model="Pic">
  @error('Pic')
  <div class="alert-danger mb-2 mt-2">{{$message}}</div>
  @enderror
<div wire:loading wire:target="Pic" class="text-sm italic text-gray-500">Uploading...</div>

   
  <button class="btn ml-0 alert-info btn-outline" type="submit">Change Pic</button>
 </form>

</div>
<br/>