<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Order</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="user/assets/css/menu_style.css">
</head>
<body>
<div class="wrapper">
    <div class="box">
        <label class="label" for="box1">Raw Material</label>
        <label class="label" for="box2">Production</label>
        <label for="box3">Storage</label>
        <input checked="checked" id="box1" name="box" type="radio">
        <label for="box4">Transportation</label>
        @include('user.trans')
    </div>
</body>
</html>
