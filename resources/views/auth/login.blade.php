@extends('layouts.main')


@section('main-section')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="container">

            <div class="logincont">
                      
                <div class="cont">
                     <h1 style="text-align:center; font-family:'karla'; font-size:3rem; ">Log In</h1>
                    <!-- Email Address -->
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        
                        <!-- Password -->
                        
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" type="password"
                        name="password"
                        required autocomplete="current-password" />
                        
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            
                            
                            <!-- Remember Me -->
                            
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"  name="remember">
                                <span >{{ __('Remember me') }}</span>
                            </label>
                            
                            
                            
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                            <a href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                            <div class="btn-cont">

                                <x-primary-button class="btn" >
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </div>
                        </div>
                </form>
            </x-guest-layout>
        </div>
            
        </div>
        @endsection