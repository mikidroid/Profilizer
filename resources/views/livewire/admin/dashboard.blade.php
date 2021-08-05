
<div class="container">
 <!--include flash messages-->
     
              @include('inc.flashMessages')

<div class="d-flex flex-row align-items-center flex-nowrap mt-2">
<div class="p-2"><a class='btn btn-primary-outline' href="/admin/edit-user-info">
<i style="color:#708090" class="fas fa-user-tie"></i>   Edit Cv</a></div>
<div class="ml-auto p-2"><a href="/admin/create-article">New Post</a></div>
<div class="p-2"><a href="/admin/create-product">New Product</a></div>
</div>

<!-- First row start -->
<div class="row">
<div class="col-sm-3 col-xs-3 col-lg-3 col-md-3 text-center">
<a href="/admin/articles">
<div class="box1 twoBoxes border1 blackBoxes mb-3">
<h6>
All Posts 
<i style="color:#708090" class="fas fa-sort-down"></i></h6>
 <hr/>
 <h2><b>{{$articles->count()}}</b></h2>
</div></a>

<a href="/admin/projects" >
<div class="box1 twoBoxes border1 blackBoxes mb-3">
<h6>Projects <i style="color:#708090" class="fas fa-sort-down"></i></h6>
<hr/>
<h2><b>{{$projects->count() ?? ''}}</b></h2>
</div>
</a>
</div>

<div class="col-sm-3 col-xs-3 col-lg-3 col-md-3 text-center">
 <a href="/admin/products">
<div class="box1 twoBoxes border1 blackBoxes mb-3">
<h6>Products   <i style="color:#708090" class="fas fa-sort-down"></i>  </h6>
<hr/>
<h2><b>{{$products->count() ?? ''}}</b></h2>
</div> </a>
<a href="#">
<div class="box1 twoBoxes border1 blackBoxes mb-3">
<h6>Comments</h6>
<hr/>
<h2><b>{{$comments ?? ''}}</b></h2>
</div></a>
</div>  

<div class="col-sm-8 col-xs-5 col-lg-6 col-md-6 text-center">
<div class="card bg-dark shadow text-white" style="height:250px;width:auto">
<div class="card-body">
    <h4 class="card-title text-white">{{$Article->title ?? ''}}</h4>
    <p class="card-text myTruncate2">{{$Article->body??''}}</p>
    <p class="card-text text-muted">Last updated ( {{date("jS F, Y", strtotime($Article->updated_at??''))}})</p>
</div>
</div>
</div>
</div> 
 <!-- 2nd row start -->
 <div class="row mt-2">
  <div class="col-sm-12">
   <div class="card">
    <div class="card-body">
     <h4 class="card-title">Actions</h4>
     <hr/>
  <a class="card-text " href="/admin/create-product"><h5 class="mb-3"><i class="fas fa-shopping-bag"></i>  Add Product</h5></a>
  <a class="card-text " href="/admin/create-project"><h5 class="mb-3"> <i class="fas fa-database"></i>  Add Project</h5></a>
  <a class="card-text " href="/admin/create-article"><h5 class="mb-3"> <i class="fas fa-edit"></i>  New Article</h5></a>
  </div>
  </div>
  </div>
 </div> 
 
 
 @include('livewire.admin.inc.Users')
 
 @include('livewire.admin.inc.announce')
 
 @include('livewire.admin.inc.change-logo')
 
 <livewire:admin.inc.change-home-pic />
</div>
</div>
