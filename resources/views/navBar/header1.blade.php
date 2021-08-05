



<div class="menu"> <span></span> </div>
<nav id="nav">
		<div class="main">
		 
    <div class="mb-1">
      <a href="" class=" mr-3 text-reset">
        <i class="fab fa-lg fa-facebook-f"></i>
      </a>
      <a href="" class="fa-lg mr-3 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="fa-lg mr-3 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="fa-lg mr-3 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="fa-lg mr-3 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <hr class="text-white"/>
    <h5> <i class="text-danger fa fa-lightbulb mr-1" aria-hidden="true"></i> SamuelNissiUche (Admin Panel)</h5>
    <hr/>
   <p class="mb-1 mt-2"><b>  <i class="fa fa-link" aria-hidden="true"></i> Article Menu</b></p>
   <hr class="text-white mb-1 mt-1"/>
   
				<div class=""><a class="myNavLink"  href="/admin/create-article">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Create Article</a></div>

		<div class=""><a class="myNavLink" href="/admin/articles">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Articles</a></div>
		
		
   <p class="mb-1 mt-3"> <i class="fa fa-link" aria-hidden="true"></i> <b>Product Menu</b></p>
   <hr class="text-white mb-1 mt-1"/>
	
	<div class=""><a class="myNavLink"  href="/admin/create-product">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Create Product</a></div>

		<div class=""><a class="myNavLink" href="/admin/products">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Products</a></div>
			
			
<p class="mb-1 mt-3"> <i class="fa fa-link" aria-hidden="true"></i> <b>Project Menu</b></p>
   <hr class="text-white mb-1 mt-1"/>
	
	<div class=""><a class="myNavLink"  href="/admin/create-project">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Create Project</a></div>

		<div class=""><a class="myNavLink" href="/admin/projects">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Projects</a></div>
			
	
<p class="mb-1 mt-3"> <i class="fa fa-link" aria-hidden="true"></i> <b>User Menu</b></p>
   <hr class="text-white mb-1 mt-1"/>
   
				<div class=""><a class="myNavLink"  href="/admin/edit-user-info">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Edit CV</a></div>

		<div class=""><a class="myNavLink" href="#">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Edit User Details</a></div>
			
		<div class=""><a class="myNavLink" href="#">   <i class="fa fa-angle-right"
			aria-hidden="true"></i>  Add User</a></div>
	
				
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

