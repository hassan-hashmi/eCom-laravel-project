<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CommereceProject</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

{{View::make('header')}}

@yield("content")
 
{{View::make('footer')}} 
   
</body>
<style>
    .custom-login {
        height: 475px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important
    }

    .custom-product{
        height: 610px;
    }
    .slider-text{
        background-color: #454e4057 !important;
        color:black;
    }
    .trending-img{
        height:100px;
    }
    .trending-item{
        float: left;
        width:20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img
    {
        height: 250px;
    }
    .search-box
    {
        width:500px !important; 
    }
</style>
</html>