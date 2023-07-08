<!DOCTYPE html>
<html>
<head>
    <title>reg </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="user/assets/css/register_style.css">
</head>
<body>

<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="fields">
            <div class="input-field">
                <label>Affliated Company :</label>
                <input id="name" type="text" name="name"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="input-field">
                <label>Personal Name :</label>
                <input type="text" placeholder=" " required>
            </div>
            <div class="input-field">
                <label>E-mail :</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="input-field">
                <label>Phone Number :</label>
                <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>
            <div class="input-field">
                <!--                            <label>Affiliated Company :</label>-->
                <!--                            <select required>-->
                <!--                                <option disabled selected> </option>-->
                <!--                                <option>html</option>-->
                <!--                                <option>css</option>-->
                <!--                                <option>js</option>-->
                <!--                            </select>-->
            </div>
            <div class="input-field">
                <!--                            <label>Postion in Company :</label>-->
                <!--                            <select required>-->
                <!--                                <option disabled selected> </option>-->
                <!--                                <option>html</option>-->
                <!--                                <option>css</option>-->
                <!--                                <option>js</option>-->
                <!--                            </select>-->
            </div>
            <div class="input-field">
                <label>Password :</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div class="input-field">
                <label> Confirm Password :</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                       autocomplete="new-password">
            </div>
        </div>
        <button>
            <span class="btn" type="submit">Sign Up!</span>
        </button>
    </form>
</div>



</body>
</html>
