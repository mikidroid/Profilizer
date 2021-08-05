<div class="container">



      <!--Flash messages -->
              @include('inc.flashMessages')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="card shadow">
 <h5 class="card-header">Create User Information</h5>
 <div class="card-body">
  
<form action='/admin/create-user-store' method="POST">
 @csrf
 <label for='core_values' wire:click="click('core_values')" class="form-control">Core Values</label>
 
 {!!$click_core_values!!}
 
 
 <label for='bio' wire:click="click('bio')" class="form-control">Bio</label>

 {!!$click_bio!!}
 
 <label for='skills' wire:click="click('skills')" class="form-control">Skills</label>
 {{$click_skills}}
 
 <label for='achievements' wire:click="click('achievements')" class="form-control">Achievements</label>
 {{$click_achievements}}
 
 <label for='qualifications' wire:click="click('qualifications')" class="form-control">Qualifications</label>
 {{$click_qualifications}}
<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>
</div>
</form>
 

<h2 wire:click="truncate" >Delete all userinfos</h2>

    
<h2 wire:click="showList" >Load</h2>
@foreach($lists as $list)
  <p>{{$list->id}}</p>
<p>{{$list->core_values}}</p>
@endforeach
    
    
       </div> 


    
<script type="text/javascript">
    CKEDITOR.replace('bio', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
