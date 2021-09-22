<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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

  
<link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
<script type="text/javascript" src="/richtexteditor/rte.js"></script>
<script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>
  
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script type="text/javascript" src="{{asset('js/myJs.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jQuery.succinct.min.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>


        
    </head>
    <body  style="font-family:poppins" >    
       
              <!--header -->
             @include('navBar.header1') 
              <!--Brand -->
              @include('inc.brand')
       
               <!--Breadcrumbs -->
              
         <br/>     
         
              
              <!--End header -->

                @yield('content')
           
               <!--End content -->
                <!--footer -->
                
               <!--End footer -->
        
  @stack('modals')
@livewireScripts
      
<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/mdb.min.js')}}"></script>

<!--<script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/bootstrap.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="{{asset('node_modules/mdbootstrap/js/popper.min.js')}}"></script> -->
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script type="text/javascript" >
$(function(){
    $('.myTruncate').succinct({
      size: 5
    });
  });
</script>
      
<script >
        $(document).ready(function() {
          $('#summernote').summernote();
        });
    </script>
<script >
ClassicEditor
        .create( document.querySelector('#ckeditor'), {
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
<script type="text/javascript" >
$('.menu, .overlay').click(function () {
$('.menu').toggleClass('clicked');
$('#nav').toggleClass('show');
});
</script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    skin: 'bootstrap',
    plugins: 'lists, link, image, media',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
    menubar: false
  });
</script>





    </body>
   
</html>
