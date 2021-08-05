@if(Session::has('success'))
<div class="alert alert-primary alert-dismissible fade show">
    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show">
    {{Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif