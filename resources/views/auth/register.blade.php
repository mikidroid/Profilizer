@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mt-4 mb-4">
<h4 class="card-title mb-3">Register</h4>
<hr/>
        <x-jet-validation-errors class="mb-4" />
        
        @if (session('status'))
            <div class="mb-4 alert alert-primary">
                {{ session('status') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name" value="{{ __('Name') }}" />
                <input id="name" class="form-control mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            
           <div class="mt-4">
                <label for="user_id" value="User Id" />
                <input id="user_id" class="form-control mt-1" type="text" name="user_id" :value="old('user_id')" required />
            </div>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}" />
                <input id="email" class="form-control mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" />
                <input id="password" class="form-control mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <input id="password_confirmation" class="form-control mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-decoration-none" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button class="alert-info ml-4">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
    @endsection
