<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>PetroTech</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user/assets/css/homepage.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="header" id="header">
    <div class="header-container">
        <a href="" class="logo">
            <img src="user/assets/images/logo.png">
        </a>
        <nav class="nav">
            <ul class="nav-menu">
                @guest
                    @if (Route::has('login'))
                        <li><a href="{{ route('login') }}" class="con con-login">Log In</a></li>
                    @endif
                    @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="con con-sign">Sign up</a></li>
                    @endif
                @else
                    <a style="color: #FCA311; font-weight: bold; font-size: large">
                        {{ Auth::user()->name }}
                    </a>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="con con-sign">Log Out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </nav>
    </div>
</header>


<div class="main-background">
    <img class="image" src="user/assets/images/WhatsApp Image 2023-xxxx01-31 at 17.14.58.jpg">
</div>



<div class="main-background">
    <img class="image" src="user/assets/images/WhatsAxxxpp Image 2023-01-31xxxx at 17.14.58.jpg">
</div>


<!-- <div class="icons">
    <a href=" "><i class="fas fa-user"></i></a>
    <a href=" "><i class="fab fa-whatsapp"></i></a>
    <a href=" "><i class="fas fa-exclamation-circle"></i></a>
    </div>
 -->
</body>
</html>
