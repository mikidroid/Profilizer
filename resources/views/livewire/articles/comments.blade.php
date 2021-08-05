
<div class="container" >

 <h4 class="ml-4 mt-2">Reactions ({{count($_Comments)}})</h4>
 <hr/>
  <div class="row">
   
  <div class="col-sm-12 col-md-12">
  @if(!$_Comments)
   <h5 class="p-1 alert-primary">There are no comments yet..</h5>
  @endif
  
  @foreach($_Comments as $Comment)
  <div style="width:100%" >
   
  <!-- Load avatar -->
 <div  style="width:15%;float:left">
 <img class="ml-3" src="/storage/core/ProfileAvatar.png" width="40px" height="40px" style="object-fit:cover">
 </div>
  <!-- End load avatar -->
  <!-- Load Comments -->
 <div style="width:85%;float:left">
 <div class="mt-0">
  <h4 class=" p-1 mb-1">
  {{$Comment->name}}
  </h4>
  <div class="b1 bg-light p-1">
  <span>Added On:</span>
  <?php echo date("jS F, Y", strtotime($Comment->created_at));?>
  </div>
  <div class="card-text ml-2 mb-2 mt-2" style="font-size:13px">
  {{$Comment->content}}
  </div>
   
  <div class="d-flex row mb-4">
  
    
<!-- Trigger the modal with a button -->
<a  class="ml-4"  href="/articles/create-reply/{{$Comment->id}}"> Reply to {{$Comment->name}} 

</a>

<!-- Modal -->
    
    </div>
    </div>
<!-- Reply -->
  @include('livewire.articles.replies')
    </div>
  
   
   </div>
   
   @endforeach
  <!--End Load cooment -->
 </div>
 
 
  <!--Add cooment -->
  
<div class="container mb-4 mt-5">

 <form action="/articles/comments/{{$Article->id}}" method="POST">
  @csrf
  <input type="text" placeholder="" class="mb-2 form-control" name="name" value="{{$_name}}" >
  <textarea type="text" placeholder="body.." class="mb-2 form-control" name="_content">
   </textarea>
  <button class="btn ml-0 alert-info form-control btn-outline" type="submit">Comment</button>
 </form>
 
</div>
 
 </div>
 </div>
 <br/>


  