@extends('layouts.main')

@section('main-section')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        @push('title')
            <title>About</title>
        @endpush
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        
    </head>
    <body>
        
        <h1 class="about">About</h1>
        <div class="contain">
            
            <div class="content">
                <p class="p7">Hey there!! My name is Mukul kumar singh and i designed this website for fun i also 
                    love to draw sketches. You can also show your skills on my website and your sketches 
                        is displayed in my gallery. 
                    </p>
               </div>
   
           </div>
    </body>
    </html>

@endsection