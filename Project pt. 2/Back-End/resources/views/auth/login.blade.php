<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="user/assets/css/login_style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

    <title>Sign in </title>
</head>
<body>
<nav class="">
    <div class="container"><a class="" href="#">
            <img src="user/assets/images/barrel_icon.jpg">
            <span>Petro.tech</span></a>
    </div>
</nav>
<div class="wrapper">
    <div class="form-container sign-in">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                    <div class="link">
                        <a class=" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}</a>
                    </div>
                @endif
        </form>
    </div>
</div>

</body>
</html>
