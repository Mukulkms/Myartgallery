@extends('layouts.main')

@section('main-section')
    
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">

<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf
        

            <div class="logincont2">
                      
                <div class="cont2">
        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <h1 style="text-align:center; font-family:'karla'; font-size:3rem; margin:0rem 0 0 0; ">Reset </h1>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                        
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        
                        
                            <x-primary-button  class="btn">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        
                    </div>
                </div>
            </div>
                    </form>
                
                </x-guest-layout>
                
                @endsection