<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="user/assets/css/userdash_style.css">
</head>
<body>

<div class="container">
    <form action="#">
        <h1>Products :</h1>
        <div class="fields">
            @foreach($type as $type)
                <div class="input-field">
                    <ul>
                    <li class="licolor"> {{$type->name}}   <small> {{$type->true_price}} $ </small></li>
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="line"></div>
        <h1>Offshore/Onshore wells : </h1>
        <div class="fields">
            <div class="input-field">
                <ul>
                    <li class="licolor">MERGED'KHALDA'<small> Active </small></li>
                </ul>
            </div>
            <div class="input-field">
                <ul>
                    <li class="licolor">WEST KALABSHA <small> Active </small></li>
                </ul>
            </div>
            <div class="input-field">
                <ul>
                    <li class="licolor">MELEIHA"AGIBA"<small> Active </small></li>
                </ul>
            </div>
            <div class="input-field">
                <ul>
                    <li class="licolor">QARON(APACHE)<small> Active </small></li>
                </ul>
            </div>
            <div class="input-field">
                <ul>
                    <li class="licolor">SHUKHEIR"OSOCO"<small> Active </small></li>
                </ul>
            </div>
            <div class="input-field">
                <ul>
                    <li class="licolor">HORUS (THARWA) <small> Active </small></li>
                </ul>
            </div>
        </div>







        <div class="line"></div>

        <h1>Abroad Importers: </h1>
        <div class="fields">
            <div class="input-field">
                <h2>In Europe :</h2>
            </div>
            <div class="input-field">
                <h2>In America :</h2>
            </div>

            <div class="input-field fortext">
                <ul>
                    <li class="licolor">BP</li>
                </ul>
            </div>
            <div class="input-field fortext">
                <ul>
                    <li class="licolor">Gazprom Neft</li>
                </ul>
            </div>
            <div class="input-field fortext">
                <ul>
                    <li class="licolor">Royal Dutch Shell</li>
                </ul>
            </div>
            <div class="input-field fortext">
                <ul>
                    <li class="licolor">EXXonMobil</li>
                </ul>
            </div>
            <div class="input-field fortext">
                <ul>
                    <li class="licolor">Chevron</li>
                </ul>
            </div>
            <div class="input-field fortext">
                <ul>
                    <li class="licolor">Valero Energy</li>
                </ul>
            </div>
        </div>
        <button><a href="{{url('start_order')}}">Start Order ></a></button>


    </form>
</div>


{{--<div class="icons">--}}
{{--    <a href=" "><i class="fas fa-user"></i></a>--}}
{{--    <a href=" "><i class="fab fa-whatsapp"></i></a>--}}
{{--    <a href=" "><i class="fas fa-exclamation-circle"></i></a>--}}
{{--</div>--}}


</body>
