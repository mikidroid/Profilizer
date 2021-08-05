  <?php 
  $_Replies=DB::select('SELECT * FROM replies WHERE replies.comment_id=?',[$Comment->id]);
  
  ?>
  @foreach($_Replies as $Reply)
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
  {{$Reply->name}}
  </h4>
  <div class="b1 bg-light p-1">
  <span>Added On:</span>
  <?php echo date("jS F, Y", strtotime($Reply->created_at));?>
  </div>
  <div class="card-text ml-2 mb-2 mt-2" style="font-size:13px">
  {{$Reply->content}}
  </div>
   
  
    
    
    </div>
    </div>
    </div>
    
    @endforeach