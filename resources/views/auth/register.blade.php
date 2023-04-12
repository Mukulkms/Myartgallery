@extends('layouts.main')


@section('main-section')


<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@push('title')
    <title>Register</title>
@endpush
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container">
           
            <div class="logincont">
                <div class="cont">
                    <h1 style="text-align:center; font-family:'karla'; font-size:3rem; margin:2rem 0 0 0; ">Register</h1>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" /><br>
            <x-text-input id="name"  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')"  />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" /><br>
            <x-text-input id="email"  type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')"  />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" /><br>

            <x-text-input id="password" 
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"  />
        </div>
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
             <br>
            <x-text-input id="password_confirmation" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>
          
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <div class="btn-cont">
            <x-primary-button class="btn">
                {{ __('Register') }}
            </x-primary-button>
            </div>
        </div>
            </div>
        </div>
        </div>
    </form>
</x-guest-layout>
@endsection