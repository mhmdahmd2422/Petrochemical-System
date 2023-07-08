<div class="content">
    <div class="inner">
        <div class="left-holder">
            <div class="list">
                <div class="table_list">
                    <div class="body">
                        <div class="main_table">
                            <div class="table_header">
                                <div class="row">
                                    <h1>Types of Petroleum</h1>
                                </div>
                            </div>
                            <div class="table_body">
                                @foreach($types as $type)
                                <div class="row">
                                    <div class="col col_no">
                                    </div>
                                    <div class="col col_des">
                                        <p>{{$type->name}}</p>
                                    </div>
                                    <div class="col col_price">
                                        <span id="item_price">${{$type->true_price}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{url('/add_raw_data')}}" method="post">
            @csrf
            <span>Choose your type :</span>
            <span class="labe2">Vendor:</span>
            <div class="form-group">
                <select  id="type-dropdown" name="type" class="form-control">
                    <option value="">-- Select Type --</option>
                    @foreach ($types as $data)
                        <option value="{{$data->id}}">
                            {{$data->name}}
                        </option>
                    @endforeach
                </select>

                <select id="vendor-dropdown" name="vendor" class="form-control2">
                </select>

            </div>

            <span>Enter Required Quantity (Barrels) :</span>
            <div class="form-wrapper">

                <input id="quantity" type="number" name="quantity" placeholder="" class="form-control">

            </div>
            <span>Expected date of receipt :</span>
            <div class="form-wrapper">
                <input id="date" type="date" name="date" placeholder="Email Address" class="form-control" disabled>

            </div>
            <span>Total Price ( $ ) :</span>
            <div class="form-wrapper" id="price">
                <input id="total_price" name="total_price"  type="number" placeholder="0.00$" class="price" class="form-control">
            </div>
            <button type="submit">NEXT ></button>
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
        $('#type-dropdown').on('change', function () {
            var idtype = this.value;
            $("#vendor-dropdown").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    type_id: idtype,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#vendor-dropdown').html('<option value="">-- Select Vendor --</option>');
                    $.each(result.vendors, function (key, value) {
                        $("#vendor-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });

        $('#vendor-dropdown').on('change', function () {
                    var vendor = this.value;
                    $("#total_price").html('');
                    $.ajax({
                        url: "{{url('api/fetch-price')}}",
                        type: "POST",
                        data: {
                            vendor: vendor,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                success: function (result) {
                    $.each(result.vendor, function (key, value) {

                        $("#price").append('<input hidden value="' + value.price +'" id="unit_price">');
                    });
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
                    var output = d.getFullYear() + '-' +
                        (month<10 ? '0' : '') + month + '-' +
                        (day<10 ? '0' : '') + day;//  Get price value
                    $('#total_price').val(price * quan); // show total
                    $('#date').val(output);
                });

        });
    });
</script>
