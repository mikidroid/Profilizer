@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-4">
        
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 alert alert-primary">
                {{ session('status') }}
            </div>
        @endif

   <form method="POST" action="{{ route('login') }}">
   @csrf
   <div class="card-body">
<h4 class="card-title mb-3">Login</h4>
<hr/>
    
   <label for="email">Email</label>
   <input id="email" class="form-control mb-3" type="email" name="email" :value="old('email')" required autofocus />
        
  <label for="password" >Password</label>
  <input id="password" class="form-control mb-3" type="password" name="password" required autocomplete="current-password" />
            
   <div class="form-group form-check">
   <input type="checkbox" class="form-check-input" id="remember_me" name="remember" />
  <label for="remember_me" class="form-check-label">Remember me</label></div>
                
  <div class="flex items-center justify-end mt-4">
  @if (Route::has('password.request'))
  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
  {{ __('Forgot your password?') }}
  </a>
  @endif

  <x-jet-button class="ml-4 btn btn-primary-outline text-dark">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            </div>
        </form>
        </div>
    @endsection
