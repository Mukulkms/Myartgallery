@extends('layouts.main')
@section('main-section')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
     @push('title')
        <title>Home</title>
    @endpush
</head>
<body>
    
    
    <div class="container">
         <div class="img">
            <img class="tanjiro" src="{{ asset('images/tanjiro.jpg') }}" alt="">
         </div>
         <div class="content">
             <h1>Create Your Sketch And Upload Here </h1>
             <p>Hey!! Welcome to my Gallery Discover my amazing art and sketches and you can also upload your sketch and show your skills. </p>
             <div class="btn">
                 <a href="{{url('/image-gallery')}}" class="discover">Discover More</a>
                 @if (Auth::check())
                 <a href="{{ url('/image-gallery') }}" class="upload">Upload Your</a>
             @else
                 <a href="{{ route('login') }}" class="upload">Upload Your</a>
             @endif
             
                </div>
            </div>

        </div>
</body>
</html>
@endsection

