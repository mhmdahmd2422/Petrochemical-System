<div class="content">
    <div class="contact-box">
        <div class="right">
            <span>Units available for storage :</span>

            <form action="{{url('/add_storage_data')}}" method="post">
                @csrf
            <select name="storage" id="storage-dropdown"  name="storage" class="form-control">
                <option value="">-- Select Unit --</option>
                @foreach ($storages as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                @endforeach
            </select>

            <div class="tlable"></div>
            <span>Storage Price ( EGP ) :</span>
            <div class="form-wrapper" id="unit_price_con">
               <div id="price">
                   <input name="price" id="unit_price"  type="number" placeholder="0.00$" class="price" class="form-control">
               </div> <span>barrel <small> ( per day ) </small>  </span>
            </div>
            <div class="dlabel">
                <span>Longest Storage Period :</span>
                <div class="form-wrapper">
                    <input id="date" type="date"  class="form-control">
                </div>
            </div>
        </div>

        <div class="left">
            <span>Storage Location :</span>
            <div id="map_con">
            <div class="map" id="map">
                <iframe id="frame" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBydKVBN7SPKF3vzuNCUPjw0grIl4XqJzU&q=egypt" width="300" height="250"></iframe>
{{--                <iframe width="300" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=31.338903087635018,%2030.066586732042445+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>--}}
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7292343.962473447!2d36.17131218717354!3d26.817207495869056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2z2YXYtdix!5e0!3m2!1sar!2seg!4v1686261048379!5m2!1sar!2seg" width="300" height="250"  allowfullscreen="" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
            </div>
            </div>
            <div class="tprice" id="tprice">
                <span>Quantity to Store ( Barrels ) :</span>
                <div class="form-wrapper">
                    <input id="total_price" name="quantity"  type="number" placeholder="0" class="price" class="form-control">
                </div>
            </div>
            <button type="submit">NEXT ></button>
        </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#storage-dropdown').on('change', function () {
            var storage = this.value;
            $("#price").html('');
            $.ajax({
                url: "{{url('api/fetch-unit-price')}}",
                type: "POST",
                data: {
                    storage_id: storage,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result.storage, function (key, value) {

                        $("#price").append('<input type="number" placeholder="0.00 EGP" class="form-control" value="' + value.price +'" id="unit_price">');
                        // $("#map").append('<iframe width="300" height="250" src="' + value.loc +'></iframe>');
                    });
                    // $('#price').append('<div>Price Per Unit: <span>value.price</span></div>');
                }
            });
        });
        $('#storage-dropdown').on('change', function () {
            var storage = this.value;
            $("#frame").html('');
            $.ajax({
                url: "{{url('api/fetch-unit-loc')}}",
                type: "POST",
                data: {
                    storage_id: storage,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result.storage_loc, function (key, value) {
                        $("#frame").attr("src", value.location);
                        // $("#frame").append('<iframe width="300" height="250" src="' + value.location +'></iframe>');
                    });
                    // $('#price').append('<div>Price Per Unit: <span>value.price</span></div>');
                }
            });
        });
        $('#storage-dropdown').on('change', function () {
            var storage = this.value;
            $("#total_price").html('');
            $.ajax({
                url: "{{url('api/fetch-total-price')}}",
                type: "POST",
                data: {
                    storage_id: storage,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result.storage_quantity, function (key, value) {
                        $('#total_price').val(value.quantity);
                    });
                    // $('#price').append('<div>Price Per Unit: <span>value.price</span></div>');
                }
            });
        });
        $(function() {  //  In jQuery 1.6+ this is same as $(document).ready(function(){})
            $('#storage-dropdown')  //  jQuery CSS selector grabs elements with the ID's "quantity" & "item_price"
                .on('change', function (e) {  //  jQuery 1.6+ replcement for .live (dynamically asigns event, see jQuery API)
                    //  in this case, our event is "change" which works on inputs and selects to let us know when a value is changed
                    //  below i use inline if statements to assure the values i get are "Real"
                    // var quan = $("#total_price").val() != "" ? parseInt($("#total_price").val()) : 1
                    $("#date").html('');
                    var d = new Date();
                    var month = d.getMonth();
                    var day = d.getDate()+14;
                    var output = d.getFullYear() + '-' +
                        (month<10 ? '0' : '') + month + '-' +
                        (day<10 ? '0' : '') + day;//  Get price value
                    $('#date').val(output);
                });

        });
    });
</script>
