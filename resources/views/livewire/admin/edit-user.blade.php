<div class="container">
 <!--flash messages-->
@include('livewire.admin.inc.flashMessages')
<div class="card mt-3">
 <div class="card-header">
  <h4 class="card-title">Edit User</h4>
 </div>
 <div class="card-body">
  <!--form start-->
  <form wire:submit.prevent="update({{$User->id}})">
   <!--Name form-->
  <label for="name" class="label" >Name</label>
  <input type="text" class="form-control mb-2" name="name" wire:model="name" value="{{$User->name}}">
  <!--Blade error function when there is name input error -->
  @error('name')
  {{$message}}
  @enderror
  <!--Username form-->
 <label for="Username" class="label" >Username</label>
  <input type="text" class="form-control mb-2" name="user_id" wire:model="user_id" value="{{$User->user_id}}">
  @error('user_id')
  {{$message}}
  @enderror
   <!--User type form-->
  <label for="name" class="label" >Name</label>
  <select type="text" class="form-control mb-2" name="user_type" wire:model="user_type" value="{{$User->user_type}}">
   <option>moderator</option>
   <option>regular</option>
   <option>admin</option>
   </select>
  <!--Blade error function when there is name input error -->
  @error('user_type')
  {{$message}}
  @enderror
 <!--Email form-->
<label for="Email" class="label" >Email</label>
  <input type="text" class="form-control mb-2" name="email" wire:model="email" value="{{$User->email}}">
  @error('email')
  {{$message}}
  @enderror
  
  <!--submit button -->
  <button type="submit" class="form-control btn-primary">Update</button>
  </form>
 </div>
 
   
</div>

<hr/>

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
</div>