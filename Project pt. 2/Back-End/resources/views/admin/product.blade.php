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
            padding-bottom: 1.5rem;
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
            <div class="div_center">
                <h2 class="h2_font">Add Products</h2>
                <div>
                    <label for="title">Product Title</label>
                    <input type="text" name="title" class="input_color">
                </div>
                <div>
                    <label for="description">Product Description</label>
                    <input type="text" name="description" class="input_color">
                </div>
                <div>
                    <label for="category">Product Category</label>
                    <select name="category" id="" class="input_color">
                        <option value="">cataaa</option>
                    </select>
                </div>
                <div>
                    <label for="image">Product Image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <label for="quantity">Product Quantity</label>
                    <input type="number" name="quantity" min="0" class="input_color">
                </div>
                <div>
                    <label for="price">Product Price</label>
                    <input type="number" name="price" class="input_color">
                </div>
                <div>
                    <label for="discount">Product Discount</label>
                    <input type="number" name="discount" class="input_color">
                </div>
            </div>
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
