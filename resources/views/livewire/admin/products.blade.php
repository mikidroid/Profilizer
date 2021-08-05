<div class="container">
<h4>Products</h4>
<hr/>

      <!--Flash messages -->
              @include('inc.flashMessages')

<!-- End load flash messages -->
<!-- Table class -->
<table class="table table-dark">
  <thead>
   <tr>
    <th scope="col"><b>S/N</b></th>
    <th scope="col"><b>Name</b></th>
    <th scope="col"><b>price</b></th>
    <th scope="col"><b>category</b></th>
    <th scope="col"><b>Actions</b></th>
   </tr>
  </thead>
  <!--Table body-->
  <tbody>
  @foreach($Products as $Product)
   <tr class="p-3">
    <th scope="row"><b>{{$i++}}</b></th>
     <td>
      <div class="text-truncate" style="width:50px">
      {{$Product->name}}
      </div>
     </td>
     <td>
      <div class="text-truncate" style="width:50px">
      <span>N</span>
      {{$Product->price}}
      </div>
     </td>
     <td>
      {{$Product->category}}
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
         <a class="dropdown-item" wire:click='delete({{$Product->id}})' >
          Delete
         </a>
        </li>
        <li>
         <a class="dropdown-item" href="/admin/edit-product/{{$Product->id}}">
          Edit
         </a>
       </li>
       <li>
        <hr class="dropdown-divider" />
       </li>
       <li>
        <a class="dropdown-item" href="/admin/create-product">
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
    {{$Products->links()}}
    </div>
    
<hr/>

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>
</div>

