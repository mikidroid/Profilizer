<div class="container">


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <!--Flash messages -->
              @include('inc.flashMessages')

<div class="card shadow">
 <h5 class="card-header"> Edit User Information </h5>
 <div class="card-body">
  
<form action='/admin/edit-user-update/core_values' method="POST">
 @csrf

 <!-- Core Values Edit -->
 <label for='core_values' wire:click="click('core_values')" class="form-control">Core Values</label>
 
 @if($click_core_values)
 
<textarea type='text' name='core_values' id='article-ckeditor' class='form-control' > {{$core_values}}</textarea>
 
<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>

<script type="text/javascript">
ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ), {
image: {
            // Configure the available styles.
            styles: [
                'alignLeft', 'alignCenter', 'alignRight'
            ],

            // Configure the available image resize options.
            resizeOptions: [
                {
                    name: 'resizeImage:original',
                    label: 'Original',
                    value: null
                },
                {
                    name: 'resizeImage:50',
                    label: '50%',
                    value: '50'
                },
                {
                    name: 'resizeImage:75',
                    label: '75%',
                    value: '75'
                }
            ],

            // You need to configure the image toolbar, too, so it shows the new style
            // buttons as well as the resize buttons.
            toolbar: [
                'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight',
                'resizeImage',
                '|',
                'imageTextAlternative'
            ]
        },
            ckfinder: {
                uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        },{
            alignment: {
                options: [ 'right', 'right' ]
            }}
            
            )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
</script>

 @endif
 
 </form>
 <!-- Core Values End Edit -->
 
 
 <!-- bio Values Edit -->
<form action='/admin/edit-user-update/bio' method="POST">
 @csrf
 <label for='bio' wire:click="click('bio')" class="form-control">Bio</label>
 
 @if($click_bio)
 
<textarea type='text' name='bio' id='article-ckeditor' class='form-control' > {{$bio}}</textarea>

<script type="text/javascript">
ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ), {
            ckfinder: {
                uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        },{
            alignment: {
                options: [ 'right', 'right' ]
            }} )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
</script>
 
<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>
 @endif
 
 </form>
 <!-- bio Values End Edit -->
 
 <!-- Achievements Edit -->
<form action='/admin/edit-user-update/achievements' method="POST">
 @csrf
 <label for='achievements' wire:click="click('achievements')" class="form-control">Achievements</label>
 
 @if($click_achievements)
 
<textarea type='text' name='achievements' id='article-ckeditor' class='form-control' > {{$achievements}}</textarea>

<script type="text/javascript">
ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ), {
            ckfinder: {
                uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        },{
            alignment: {
                options: [ 'right', 'right' ]
            }} )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
</script>
 
<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>
           
 @endif
 </form>
 <!-- Achievements Values End Edit -->
 
 
 <!-- Qualifications Values Edit -->
<form action='/admin/edit-user-update/qualifications' method="POST">
 @csrf
 <label for='qualifications' wire:click="click('qualifications')" class="form-control">Qualifications</label>
 
 @if($click_qualifications)
 
<textarea type='text' name='qualifications' id='article-ckeditor' class='form-control' > {{$qualifications}}</textarea>

<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>

<script >
ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ), {
            ckfinder: {
                uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        },{
            alignment: {
                options: [ 'right', 'right' ]
            }} )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
</script>
 

           
 @endif
 </form>
 <!-- qualifications Values End Edit -->
 
 
 <!-- Skills Values Edit -->
<form action='/admin/edit-user-update/skills' method="POST">
 @csrf
 <label for='skills' wire:click="click('skills')" class="form-control">Skills</label>
 
 @if($click_skills)
 
<textarea type='text' name='skills' id='article-ckeditor' class='form-control' > {{$skills}}</textarea>

<script type="text/javascript">
ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ), {
            ckfinder: {
                uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}'
            }
        },{
            alignment: {
                options: [ 'right', 'right' ]
            }} )
        .then( editor => {
            console.log( editor );
        })
        .catch( error => {
            console.error( error );
        })
</script>
 
<button class='btn btn-primary form-control' type='submit' >
              submit
           </button>
           
 @endif
 </form>
 <!-- Skills Values End Edit -->
 

</div>

       </div> 

<hr/>

 <a href="/admin/dashboard" type="submit" class="ml-2 btn btn-danger">
    Go Back
   </a>