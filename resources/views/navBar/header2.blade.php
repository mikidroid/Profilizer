



<div class="menu"> <span></span> </div>
<nav id="nav">
		<div class="main">
		 
    <div class="mb-1">
      <a href="www.facebook.com/samuelnissiuche" class=" mr-3 text-reset">
        <i class="fab fa-lg fa-facebook-f"></i>
      </a>
      <a href="www.twitter.com/samuelnissiuche" class="fa-lg mr-3 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://youtube.com/c/SamuelNissiUche" class="fa-lg mr-3 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="www.instagram.com/samuelnissiuche" class="fa-lg mr-3 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="fa-lg mr-3 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <hr class="text-white"/>
    <h5> <i class="text-danger fa fa-lightbulb mr-1" aria-hidden="true"></i> SamuelNissiUche</h5>
    <hr/>
   <p class="mb-1 mt-2"><b>  <i class="fa fa-link" aria-hidden="true"></i>  Menu</b></p>
   <hr class="text-white mb-1 mt-1"/>
				<div class=""><a class="myNavLink"  href="/articles"> <i class="fa fa-book" aria-hidden="true"></i> Articles</a></div>
		<div class=""><a class="myNavLink"  href="/products"> <i class="fa fa-cart-plus" aria-hidden="true"></i>  Products</a></div>
		<div class=""><a class="myNavLink" href="/projects"> <i class="fa fa-briefcase" aria-hidden="true"></i> My Projects</a></div>
		
		
   <p class="mb-1 mt-3"> <i class="fa fa-link" aria-hidden="true"></i> <b>Reach</b></p>
   <hr class="text-white mb-1 mt-1"/>
				<div class=""><a class="myNavLink" target="_blank" href="tel:+2347018234978">   <i class="fa fa-mobile" aria-hidden="true"></i>  Call</a></div>
<div class=""><a class="myNavLink" target="_blank" href="mailto:admin@samuelnissiuche.com"> <i class="fa fa-envelope" aria-hidden="true"></i> Email</a></div>
		<div class=""><a class="myNavLink" target="_blank" href="#"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> About</a></div>
				
		<div class=""><a class="myNavLink" target="_blank" href="https://www.facebook.com/ravi7284007">  <i class="fa fa-sm fa-download"></i> Download CV</a></div>
		
	<!-- Social links -->
<p class="mb-1 mt-3"><b> <i class="fa fa-link" aria-hidden="true"></i> Social Links</b></p>
   <hr class="text-white mb-1 mt-1"/>
				<div class=""><a class="myNavLink" target="_blank" href="www.facebook.com/samuelnissiuche"> <i class="fab fa-sm fa-facebook-f"></i>  Facebook</a></div>
		<div class=""><a class="myNavLink" target="_blank" href="www.instagram.com/samuelnissiuche">   <i class="fab fa-sm fa-instagram"></i>  Instagram</a></div>
		<div class=""><a class="myNavLink" target="_blank" href="https://wa.me/message/KWLUKGP5L7EKG1">  <i class="fab fa-whatsapp"></i> Whatsapp</a></div>
		
	<!-- Include livewire Mail Component -->
		<livewire:inc.send-mail />
	
				
	<!-- User Account Actions -->
	<div class="myNavLink mt-2"> <i class="fa fa-cog" aria-hidden="true"></i> Account</div>
	<hr class="text-white mt-0 mb-2"/>
 @if(Auth::check())
    <i class="fa fa-user-circle" aria-hidden="true"></i> {{auth()->user()->name}}
    
 <!-- Action to logout -->   
<form method="POST" action="{{ route('logout') }}">
       @csrf
<a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
   <i class="fas fa-sign-out"></i>{{ __('Logout') }}
        </a>
</form>
 @endif
	<!-- End user account actions-->
				
		</div>
</nav>
<div class="overlay"></div>

<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
</script>