<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center{
            margin: auto;
            width: 50%;
            border: 1px solid white;
            text-align: center;
            margin-top: 1.5rem;
        }
        .font_size{
            text-align: center;
            font-size: 2.5rem;
            padding-bottom: 2.5rem;
        }
        td, th{
            padding: 1.25rem;
        }
        .image_size{
            width: 5rem;
            height: 5rem;
        }
        .th_color{
            background-color: #0c5460;
        }
        .option{
            font-style: italic;
            text-decoration: underline black 2px;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <h2 class="font_size">Vendors Products</h2>
            <table class="center">
                <tr class="th_color">
                    <th>Vendor Name</th>
                    <th>Distance</th>
                    <th>Total Quantity</th>
                    <th>Types</th>
                    <th class="option">Delete</th>
                    <th class="option">Edit</th>
                </tr>
                @foreach($data as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}} @if($product->discount_price == '')No Discount @endif</td>
                    <td><img class="image_size" src="/product/{{$product->image}}"></td>
                    <td><a href="{{url('delete_product', $product->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure You Want to Delete?')">Delete</a></td>
                    <td><a class="btn btn-warning" href="{{url('edit_product', $product->id)}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- main-panel ends -->
    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
</div>
<!-- plugins:js -->
@include('admin.js')
<!-- End custom js for this page -->
</body>
</html>
