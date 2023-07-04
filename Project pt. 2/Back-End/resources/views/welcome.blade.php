<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PetroTech</title>
    <link rel="stylesheet" href="user/assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="user/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="user/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="user/assets/css/Navbar-With-Button-icons.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="background: #1D2E4A;border-color: #fca507;">
<div id="app">

    <main class="py-4">
        <body>
        <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#" style="margin-left: -47px;">
                    <img width="100" height="80" style="width: 40px;height: 58px;" src="user/assets/images/WhatsApp%20Image%202023-01-31%20at%2017.14.58.jpg">
                    <span style="color: #FCA507;font-size: 42px;font-weight: bold;padding: 9px;margin: -6px;margin-bottom: -11px;">Petro.tech</span>
                </a>
                <div class="collapse navbar-collapse" id="navcol-1" style="margin-right: -37px;">
                    <ul class="navbar-nav me-auto"></ul><i class="fas fa-search text-warning" style="font-size: 23px;border-style: solid;border-radius: 8px;padding: 8px;"></i>
                    @guest
                    @if (Route::has('login'))
                        <a class="btn btn-primary" href="{{ route('login') }}" style="margin: 19px;color: #fca507;background: #1d2e4a;border-color: #fca507;padding-right: 15px;padding-left: 15px;">Log In</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="btn btn-primary" href="{{ route('register') }}" style="background: #fca507;color: #1d2e4a;border-color: rgba(29,46,74,0);">Sign up</a>
                    @endif
                    @else
                            <a>
                                {{ Auth::user()->name }}
                            </a>
                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="background: #fca507;color: #1d2e4a;border-color: rgba(29,46,74,0);">Log Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <button class="navbar-toggler" data-bs-toggle="collapse">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <ul class="nav flex-column bg-light shadow" style="width: 50.667px;display: inline;position: absolute;margin-left: 1210px;height: 250px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;border-top-left-radius: 13px;border-bottom-left-radius: 20px;">
            <li class="nav-item logo-holder" style="width: 47.6667px;"><a class="nav-link float-end" id="sidebarToggleHolder" href="{{url('/redirect')}}"><i class="fas fa-bars" id="sidebarToggle" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link active text-start py-1 px-0" href="{{url('/redirect')}}"><i class="fas fa-tachometer-alt mx-3" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link text-start py-1 px-0" href="{{url('/redirect')}}"><i class="fas fa-user mx-3" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link text-start py-1 px-0" href="{{url('/redirect')}}"><i class="far fa-life-ring mx-3" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link text-start py-1 px-0" href="{{url('/redirect')}}"><i class="fas fa-archive mx-3" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link text-start py-1 px-0" href="{{url('/redirect')}}"><i class="fas fa-chart-bar mx-3" style="color: #fca507;"></i></a></li>
            <li class="nav-item"><a class="nav-link text-start py-1 px-0" href="{{url('/redirect')}}"><i class="fas fa-sign-out-alt mx-3" style="color: #fca507;"></i><i class="fa fa-caret-right d-none position-absolute"></i></a></li>
        </ul><img width="100" height="80" style="margin: 113px;margin-right: 153px;margin-left: 23px;height: 350px;width: 1000px;margin-top: 52px;margin-bottom: 9px;border-radius: 21px;" src="user/assets/images/WhatsApp%20Image%202023-xxxx01-31%20at%2017.14.58.jpg"><img width="100" height="80" style="margin: 113px;margin-right: 153px;margin-left: 23px;height: 350px;width: 1000px;margin-top: 52px;border-radius: 21px;" src="user/assets/images/WxxxxhatsAxxxpp%20Image%202023-01-31xxxx%20at%2017.14.58.jpg">
        <script src="user/assets/js/bootstrap.min.js"></script>
    </main>
</div>
</body>
</html>
