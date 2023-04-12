@extends('layouts.main')

@section('main-section')
    
<link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
@push('title')
    <title>Reset Password</title>
@endpush
<x-guest-layout>

    <div class="f-container">


          <div class="reset">

              <h1 class="heading2">
                  Forgot your password?  
                </h2><br>
                <p class="p3">No problem Enter your email address to reset </p><br>
                
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email"  type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="" />
                        </div>
                        <br>
                        <div class="">
                            <x-primary-button class="buttton">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
        </div>
        </x-guest-layout>
    
    @endsection