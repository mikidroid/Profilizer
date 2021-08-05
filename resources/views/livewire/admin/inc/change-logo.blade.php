<div class="container mt-2 mb-4">
      <!--Flash messages -->
             
 
 <h4>Change Site Logo</h4>
 <form wire:submit.prevent="ChangeLogo" enctype="multipart/form-data">
  <img src="/storage/core/Logo.png" class="mt-2 mb-2" width="60px" height="auto">
  <input type="file" class="mb-2 form-control-file" name="Logo" wire:model="Logo">
  @error('Logo')
  <div class="alert-danger mb-2 mt-2">{{$message}}</div>
  @enderror
<div wire:loading wire:target="Logo" class="text-sm italic text-gray-500">Uploading...</div>

   
  <button class="btn ml-0 alert-info btn-outline" type="submit">Change Logo</button>
 </form>

</div>
<br/>