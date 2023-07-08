<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="user/assets/css/purchase_style.css">

</head>
<body>

<div class="container">

    <form action="{{url('/add_payment_data')}}" method="post">
        @csrf
        <div class="row">

            <div class="col">

                <h1 class="title">Shipping</h1>

                <h3 class="topic">Shipping details</h3>


                <div class="inputBox">
                    <table>
{{--                        <tr class="table">--}}
{{--                            <td>Use saved address</td>--}}
{{--                            <td><input type="text" name="username" required></td>--}}
{{--                        </tr>--}}
                    </table>
                </div>


                <div class="inputBox">
                    <span>First line of address</span>
                    <input type="text" name="address1">
                </div>
                <div class="inputBox">
                    <span>Street name</span>
                    <input type="text" name="address2">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Postcode</span>
                        <input type="text" name="postcode">
                    </div>
                    <div class="inputBox">
                        <span>Signature</span>
                        <input type="text" name="signature">
                    </div>
                </div>

                <div class="td-btn">
{{--                    <table>--}}
{{--                        <tr>--}}
{{--                            <td>Cancel order</td>--}}
{{--                            <td>--}}
{{--                                <input type="submit" value="Payment" class="btn">--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    </table>--}}
                </div>

            </div>

            <div class="col">

                <h1 class="title">Payment</h1>
                <h3 class="topic">Payment Details</h3>


                <div class="inputBox">
                    <table class="table">
{{--                        <tr>--}}
{{--                            <td>Use saved card</td>--}}
{{--                            <td><input type="text" name="username" required></td>--}}
{{--                        </tr>--}}
                    </table>
                </div>
                <div class="inputBox">
                    <span>Name on card</span>
                    <input type="text" name="card_name" placeholder="ANOPC CORP.">
                </div>
                <div class="inputBox">
                    <span>Card number</span>
                    <input type="number" name="card_number" placeholder="••••  ••••  ••••  ••••">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Expiration</span>
                        <input type="number" name="exp_year" placeholder="YYYY">
                    </div>
                    <div class="inputBox">
                        <span> .</span>
                        <input type="text" name="exp_month" placeholder="MM">
                    </div>

                    <div class="inputBox">
                        <span>CVC</span>
                        <input type="text" name="cvc" placeholder="CVC">
                    </div>
                </div>
                <div class="td-btn">
                    <table class="td">
                        <tr>
{{--                            <td>Cancel order</td>--}}
                            <td>
                                <input type="submit" value="Complete order" class="btn">
                            </td>
                        </tr>
                    </table>
                </div>


            </div>

        </div>
    </form>

</div>

</body>
</html>
