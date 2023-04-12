<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('/favicon .ico') }}">
    @stack('title')
</head>
<body>
    
        <header>
            <nav>
                <div class="logo">
                    <a href="" class="brand">MyArt</a>
                </div>
               
                <div class="navbar">
                    <ul>
                    <li class="nav-itmes"><a href="/">Home</a></li>
                    <li class="nav-itmes"><a href="about">About</a></li>
                    <li class="nav-itmes"><a href="image-gallery">Art</a></li>
                    <li class="nav-itmes"><a href="https://mukulkms.github.io/Mukulsingh/">My Portfolio</a></li>
                </ul>
                  <div class="formbtn">
                      @if (Route::has('login'))
                      @auth
                      <a class="dashboard" href="{{ url('/dashboard') }}">Dashboard</a>
                      @else
                      <a class="login" href="{{ route('login') }}">Log in</a>
                      @if (Route::has('register'))
                      <a class="register" href="{{ route('register') }}">Register</a>
                      @endif
                      @endauth
                    </div>
                </div>
                @endif
                <button class="hamburger">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </nav>
            
        </header>
        
        <script src="{{ asset('js/ham.js') }}"></script>
    </body>
</html>