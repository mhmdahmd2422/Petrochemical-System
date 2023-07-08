        <div class="content">
            <div class="inner">
                <div class="left-holder">
                    <div class="list">
                        <div class="table_list">
                            <div class="body">
                                <div class="main_table">
                                    <div class="table_header">
                                        <div class="row">
                                            <h1>Kinds Of Finished Products</h1>
                                        </div>
                                    </div>
                                    <div class="table_body">
                                        @foreach($products as $product)
                                            <div class="row">
                                                <div class="col col_no">
                                                </div>
                                                <div class="col col_des">
                                                    <p>{{$product->name}}</p>
                                                </div>
                                                <div class="col col_price">
                                                    <span id="item_price">${{$product->true_price}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <form action="{{url('/add_prod_data')}}" method="post">
                    @csrf
                    <span>Choose your Product :</span>
                    <div class="form-group">
                        <select id="product-dropdown" name="product" class="form-control">
                            <option value="">-- Select Product --</option>
                            @foreach ($products as $data)
                                <option value="{{$data->id}}">
                                    {{$data->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <span class="labe3">Manufacture company:</span>

                    <div class="form-group">
                        <div class="form-wrapper">
                            <span>Required quantity :</span>

                            <input id="quantity" name="quantity" type="number" placeholder="0 /Liters" class="price" class="form-control">
                        </div>

                        <select id="manufacturer-dropdown" name="manufacturer" class="form-control2">
                        </select>
                    </div>

                    <span>Expected date of receipt :</span>
                    <div class="form-wrapper">
                        <input id="date" type="date" placeholder="Email Address" class="form-control" disabled>

                    </div>
                    <span>Manufacturing Cost (EGP) :</span>
                    <div class="form-wrapper" id="price">
                        <input id="total_price" name="total_price"  type="number" placeholder="0.00 EGP" class="price" class="form-control">
                    </div>
                    <button>NEXT ></button>
                </form>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {

                /*------------------------------------------
                --------------------------------------------
                Country Dropdown Change Event
                --------------------------------------------
                --------------------------------------------*/
                $('#product-dropdown').on('change', function () {
                    var idproduct = this.value;
                    $("#manufacturer-dropdown").html('');
                    $.ajax({
                        url: "{{url('api/fetch-products')}}",
                        type: "POST",
                        data: {
                            product: idproduct,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#manufacturer-dropdown').html('<option value="">-- Select Manufacturer --</option>');
                            $.each(result.manufacturers, function (key, value) {
                                $("#manufacturer-dropdown").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                            });
                        }
                    });
                });

                $('#manufacturer-dropdown').on('change', function () {
                    var manufacturer = this.value;
                    $("#total_price").html('');
                    $.ajax({
                        url: "{{url('api/fetch-product-price')}}",
                        type: "POST",
                        data: {
                            manufacturer: manufacturer,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $.each(result.manufacturer, function (key, value) {

                                $("#price").append('<input hidden value="' + value.price +'" id="unit_price">');
                            });
                            // $('#price').append('<div>Price Per Unit: <span>value.price</span></div>');
                        }
                    });
                });

                $(function() {  //  In jQuery 1.6+ this is same as $(document).ready(function(){})
                    $('#quantity, #item_price')  //  jQuery CSS selector grabs elements with the ID's "quantity" & "item_price"
                        .on('change', function (e) {  //  jQuery 1.6+ replcement for .live (dynamically asigns event, see jQuery API)
                            //  in this case, our event is "change" which works on inputs and selects to let us know when a value is changed
                            //  below i use inline if statements to assure the values i get are "Real"
                            var quan = $("#quantity").val() != "" ? parseFloat($("#quantity").val()) : 1,  //  Get quantity value
                                price = $("#unit_price").val() != "" ? parseFloat($("#unit_price").val()) : 0;
                            var d = new Date();
                            var month = d.getMonth()+1;
                            var day = Math.min(Math.max(parseInt(d.getDate()+quan/2), 1), 30);
                            alert(day);
                            var output = d.getFullYear() + '-' +
                                (month<10 ? '0' : '') + month + '-' +
                                (day<10 ? '0' : '') + day;//  Get price value
                            $('#total_price').val(price * quan); // show total
                            $('#date').val(output);
                        });

                });
            });
        </script>


