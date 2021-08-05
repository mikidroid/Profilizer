
<?php 
$prevPathUrl=url()->previous();
$prevPathName=Str::of($prevPathUrl)->basename(); 
$currentPathUrl=url()->current();
$cPT=Str::of($currentPathUrl)->dirname(2);
$cPT1=Str::of($cPT)->basename();
$cPT2=Str::of($currentPathUrl)->after($cPT1);
$cPT3=Str::of($cPT2)->replace('/','%');
$currentPathName=Str::of($cPT3)->limit(15,'...'); 
$homePath='/';
?>
@if(Route::currentRouteName()!='home')
<div class="row container mt-2">
 <div class="col-sm-10">
<div style="border-radius:10px" class="pl-2 row alert-secondary p-1">
 <a class="alert-secondary mr-2" href="/">Home</a>>>
 <a class="alert-secondary ml-2 mr-2" href="{{$prevPathUrl}}">{{$prevPathName}}</a>>>
 <div class="mr-2 ml-2 text-muted">{{$currentPathName}}</div>
</div>
</div>
</div>
@endif