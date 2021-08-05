<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Samuel Uche') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">

        <!-- Styles -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link rel="stylesheet" href="{{asset('node_modules/mdbootstrap/css/mdb.min.css')}}">
<link rel="stylesheet" href="{{asset('node_modules/mdbootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

<link rel="stylesheet" href="{{ asset('css/Mycss.css') }}">
        @livewireStyles

        <!-- Scripts -->
        
<script type="text/javascript" src="{{asset('js/myJs.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jQuery.succinct.min.js')}}"></script>
        
   <script src="{{ mix('js/app.js') }}" defer></script>

   </head>
  
   <body style="   
    
    font-family:poppins;
    font-size:14px;
    color:#565656;" >    

              <!--header -->
              <div class="row" style="overflow:hidden">
              @include('navBar.header2')
              <!--Brand -->
              @include('inc.brand')
              <!--Announcements -->
              <livewire:inc.announcement/>

              </div>
             
              
              <!--End header -->

              @yield('content')
           
              <!--End content -->
               
              <!--footer -->
              @include('footer.footer')
              <!--End footer -->
        
        @stack('modals')
      
  @livewireScripts
        
<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/mdb.min.js')}}"></script>

<!--<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/popper.min.js')}}"></script> -->
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        

<script type="text/javascript" >
$('.menu, .overlay').click(function () {
$('.menu').toggleClass('clicked');
$('#nav').toggleClass('show');
});
</script>

<script type="text/javascript" >
$(function(){
    $('.myTruncate').succinct({
      size: 5
    });
  });
</script>
       

    </body>
</html>
