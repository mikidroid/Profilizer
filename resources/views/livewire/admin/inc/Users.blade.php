@include('livewire.admin.inc.flashMessages')
<br/>
<h4 class="ml-2">List of Users</h4>
<table class="table">
  <thead>
   <tr>
    <th scope="col"><b>S/N</b></th>
    <th scope="col"><b>ID</b></th>
    <th scope="col"><b>Name</b></th>
    <th scope="col"><b>User type</b></th>
    <th scope="col"><b>Actions</b></th>
   </tr>
  </thead>
  <!--Table body-->
  <tbody>
  @foreach($Users as $User)
   <tr class="p-3">
    <th scope="row"><b>{{$i++}}</b></th>
     <td>
      <div class="text-truncate" style="width:50px">
      {{$User->id}}
      </div>
     </td>
     <td>
      <div class="text-truncate" style="width:50px">
      <span>N</span>
      {{$User->name}}
      </div>
     </td>
     <td>
      {{$User->user_type}}
     </td>
    <td>
     <!-- Light Action button -->
     <div class="btn-group shadow-0">
      <button
       type="button"
       class="btn btn-light dropdown-toggle"
       data-toggle="dropdown"
       aria-expanded="false">
      Options
      </button>
       <ul class="dropdown-menu">
        <li>
         <a class="dropdown-item" wire:click='delete({{$User->id}})' >
          Delete
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="/admin/edit-user/{{$User->id}}">
          Edit
         </a>
       </li>
       <li>
        <hr class="dropdown-divider" />
       </li>
       <li>
        <a class="dropdown-item" href="/admin/create-user">
         Add Product
        </a>
       </li>
    </ul>
  </div>
</td>
<!--End Action button --> 
</tr>
<!-- End row -->
 @endforeach
  </tbody>
</table>

<!--livewire paginate links-->
<div class="d-flex justify-content-center">
    
    </div>