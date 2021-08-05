@extends('layouts.app')
@section('content')
<div class="row"  style="
    overflow:hidden;
    background:url('/storage/background-imaes/image2.jpg') no-repeat center/cover;   
    font-family:poppins;
    font-size:14px;
    color:#565656;" >
 
<!--header image -->
@include('pages.inc.headerImage')
<!--Product slide -->
<livewire:admin.product-slide/>
<!-- Call to Action -->
@include('inc.callToAction1')
<!--start container-->
<div class="container">
@include('pages.inc.ImgBack')


<div class="row" style="margin:20px">
 
<!--col 1 -->
 <div class="col-sm-12 col-md-6 col-lg-6" style=";" >
<!--import core values -->
@include('pages.inc.coreValues')
<!--import bio /skills/ achievements -->
@include('pages.inc.bioSkillAchievements')
</div>
<!--End col 1 -->


<!--col 2 -->
 <div class="col-sm-10 col-md-6 col-lg-6" style=";" >

<!--import qualifications -->
@include('pages.inc.qualifications')
<!--import projects -->
<livewire:admin.project-slide/>
</div>
<!-- End col 2 -->

</div>
<!-- End row 1 -->

  </div>
 <!-- end  container-->
  </div>
<!-- end row -->


<livewire:articles.article-slide />

<!-- footer Advert -->
@include('inc.footerAds')
@endsection