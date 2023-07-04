<div class="content">
    <div class="contact-box">
        <div class="right">
            <span>Choose Transfer method :</span>
            <select name="" id="method-dropdown" class="form-control">
                <option value="">-- Select Method --</option>
                @foreach ($transport as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>

            <div class="lprice4">
                <span class="lprice4">Shipping charges :</span>
                <div class="form-wrapper">
                    <input  type="number" placeholder="0.00$" class="price" class="form-control"> <span>/ <small> barrel </small>  </span>
                </div>
            </div>

            <div class="lprice4" id="price-con">
                <span class="lprice4">Total Transportation charges :</span>
                <div class="form-wrapper" id="price">
                    <input  type="number" placeholder="0.00$" class="price" class="form-control">
                </div>
            </div>
        </div>
        <div class="left">
            <span>Expected delivery date :</span>
            <div class="form-wrapper">
                <input type="date"  class="form-control">
            </div>

            <div class="fmap">
                <span>Live Tracking :</span>
                <div class="map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7292343.962473447!2d36.17131218717354!3d26.817207495869056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2z2YXYtdix!5e0!3m2!1sar!2seg!4v1686261048379!5m2!1sar!2seg" width="300" height="250"  allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {

        $('#method-dropdown').on('change', function () {
            alert('this work');
            var method = this.value;
            $("#price_con").html('');
            $.ajax({
                url: "{{url('api/fetch-trans-price')}}",
                type: "POST",
                data: {
                    method_id: method,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result.transportation, function (key, value) {

                        $("#price").append('<input type="number" placeholder="0.00 EGP" class="price" class="form-control" value="' + value.price +'" id="unit_price">');
                        // $("#map").append('<iframe width="300" height="250" src="' + value.loc +'></iframe>');
                    });
                    // $('#price').append('<div>Price Per Unit: <span>value.price</span></div>');
                }
            });
        });

        // $(function() {  //  In jQuery 1.6+ this is same as $(document).ready(function(){})
        //     $('#quantity, #item_price')  //  jQuery CSS selector grabs elements with the ID's "quantity" & "item_price"
        //         .on('change', function (e) {  //  jQuery 1.6+ replcement for .live (dynamically asigns event, see jQuery API)
        //             //  in this case, our event is "change" which works on inputs and selects to let us know when a value is changed
        //             //  below i use inline if statements to assure the values i get are "Real"
        //             var quan = $("#quantity").val() != "" ? parseFloat($("#quantity").val()) : 1,  //  Get quantity value
        //                 price = $("#unit_price").val() != "" ? parseFloat($("#unit_price").val()) : 0;
        //             var d = new Date();
        //             var month = d.getMonth()+1;
        //             var day = d.getDate()+quan/2;
        //             var output = d.getFullYear() + '-' +
        //                 (month<10 ? '0' : '') + month + '-' +
        //                 (day<10 ? '0' : '') + day;//  Get price value
        //             $('#total_price').val(price * quan); // show total
        //             $('#date').val(output);
        //         });
        //
        // });
    });
</script>

