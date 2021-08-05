<div class="container">
<h4>Articles</h4>
<hr/>
<!-- Load flash messages -->
      <!--Flash messages -->
              @include('inc.flashMessages')
<!-- End load flash messages -->
<!-- Table class -->
<table class="table table-dark">
  <thead>
   <tr>
    <th scope="col"><b>S/N</b></th>
    <th scope="col"><b>Title</b></th>
    <th scope="col"><b>body</b></th>
    <th scope="col"><b>category</b></th>
    <th scope="col"><b>Actions</b></th>
   </tr>
  </thead>
  <!--Table body-->
  <tbody>
  @foreach($Articles as $Article)
   <tr class="p-3">
    <th scope="row"><b>{{$i++}}</b></th>
     <td>
      <div class="text-truncate" style="width:50px">
      {{$Article->title}}
      </div>
     </td>
     <td>
      <div class="text-truncate" style="width:50px">
      <span>N</span>
      {{$Article->body}}
      </div>
     </td>
     <td>
      {{$Article->category}}
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
         <a class="dropdown-item" wire:click='delete({{$Article->id}})' >
          Delete
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="/admin/edit-article/{{$Article->id}}">
          Edit
         </a>
       </li>
       <li>
        <hr class="dropdown-divider" />
       </li>
       <li>
        <a class="dropdown-item" href="/admin/create-article">
         Add Article
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
    {{$Articles->links()}}
    </div>
    
    
<hr/>

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
</div>
