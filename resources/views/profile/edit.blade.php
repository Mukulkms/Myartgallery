@extends('layouts.main')

@section('main-section')
    
@push('title')
    <title>My Profile</title>
@endpush
<x-app-layout>
    <x-slot  name="header" >
        <h2 class="pro" >
            {{ __('Profile') }}
        </h2>
    </x-slot>
    
   
         <div class="pro-info">

             @include('profile.partials.update-profile-information-form')
         </div>
               
            
            
            
                    @include('profile.partials.update-password-form')
                
            
                    @include('profile.partials.delete-user-form')
               
    
</x-app-layout>

@endsection