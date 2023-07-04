<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 2.5rem;
        }
        .h2_font{
            font-size: 2.5rem;
            padding-bottom: 2.5rem;
        }
        .input_color{
            color: black;
        }
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 2rem;
            border: 2px solid white;
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
            <div class="div_center">
                <h2 class="h2_font">Add Type</h2>
                <form action="{{url('/add_type')}}" method="post">
                    @csrf
                    <input type="text" name="category" class="input_color" id="" placeholder="Write Type Name">
                    <input type="number" name="price" class="input_color" id="" placeholder="Write True Price">
                    <input type="submit" name="submit" class="btn btn-primary" value="Add Type">
                </form>
            </div>
            <table class="center">
                <tr>
                    <th>Type Name</th>
                    <th>True Price</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->true_price}}</td>
                    <td><a href="{{url('delete_type', $data->id)}}" class="btn btn-danger"
                           onclick="return confirm('Are You Sure You Want To Delete?')">Delete</a></td>
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
