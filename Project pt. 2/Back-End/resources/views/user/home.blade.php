<!DOCTYPE html>
<html>
<head>
    <title>product </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="user/assets/css/userdash_style.css">
</head>
<body>

<div class="container">
    <form action="#">
        <h1>Raw Products:</h1>
        <div class="fields">
            @foreach($type as $type)
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> {{$type->name}}   <small> {{$type->true_price}} $ </small> </p>
            </div>
            @endforeach
        </div>

        <div class="line"></div>
        <h1>Offshore/Onshore wells:</h1>
        <div class="fields">
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent   <small> 86.59 $ </small> </p>
            </div>
        </div>

        <div class="line"></div>

        <h1>Importers from abroad:</h1>
        <div class="fields">
            <div class="input-field">
                <h2>In Europe :</h2>
            </div>
            <div class="input-field">
                <h2>In America :</h2>
            </div>


            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
            <div class="input-field">
                <p> <i class="fas fa-circle" style="color: #fac311;"></i> Brent    </p>
            </div>
        </div>
    </form>
    <a class="btn btn-primary" href="{{url('start_order')}}" style="background: #fca507;color: #1d2e4a;border-color: rgba(29,46,74,0);">Start Order</a>
</div>


<div class="icons">
    <a href=" "><i class="fas fa-user"></i></a>
    <a href=" "><i class="fab fa-whatsapp"></i></a>
    <a href=" "><i class="fas fa-exclamation-circle"></i></a>
</div>


</body>
