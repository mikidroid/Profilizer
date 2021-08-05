    @include('inc.flashMessages')
    <div class="modal-content">
      <div class="modal-header"> 
        <h4 class="modal-title card-title">Replying >> {{$cName[0]->name}}</h4>
      </div>
      <div class="modal-body">
        <form action="/articles/replies/{{$cId}}" method="POST">
  @csrf
  <input type="text" placeholder="" class="mb-2 form-control" name="name" value="{{$Aname}}" >
  <textarea type="text" placeholder="body.." class="mb-2 form-control" name="_content">
   </textarea>
  <button class="btn ml-0 alert-info form-control btn-outline" type="submit">Reply</button>
 </form>
      </div>
      <div class="modal-footer">
        <a data-dismiss="modal">Close</a>
      </div>
    </div>

  
