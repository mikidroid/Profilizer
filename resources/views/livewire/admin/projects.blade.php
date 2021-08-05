<div class="container">
<h4>Projects</h4>

      <!--Flash messages -->
              @include('inc.flashMessages')

<table class="table table-dark">
  <thead>
   <tr>
    <th scope="col"><b>S/N</b></th>
    <th scope="col"><b>Title</b></th>
    <th scope="col"><b>Description</b></th>
    <th scope="col"><b>Year</b></th>
    <th scope="col"><b>Actions</b></th>
   </tr>
  </thead>
  <tbody>
    
    @foreach($Projects as $Project)
 
   <tr class="p-3">
 
    <th scope="row"><b>{{$i++}}</b></th>
    
    <td> <div class="text-truncate" style="width:50px">{{$Project->name}}</div></td>
    <td><div class="text-truncate" style="width:50px">
     {{$Project->description}}
    </div></td>
    <td>{{$Project->year}}</td>
    <td>
     
<!-- Light -->
<div class="btn-group shadow-0">
  <button
    type="button"
    class="btn btn-light dropdown-toggle"
    data-toggle="dropdown"
    aria-expanded="false"
  >
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" wire:click='delete({{$Project->id}})' >Delete</a></li>
    <li><a class="dropdown-item" href="/admin/edit-project/{{$Project->id}}">Edit</a></li>
    <li>
      <hr class="dropdown-divider" />
    </li>
    <li><a class="dropdown-item" href="/admin/create-project">Add Project</a></li>
  </ul>
</div>

     
    </td>
    
   </tr>
   
 @endforeach

  </tbody>

 
</table>


<div class="d-flex justify-content-center">
    {!!$Projects->links()!!}
    </div>
    
    
<hr/>

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
</div>

