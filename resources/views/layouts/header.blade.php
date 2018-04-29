<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coffe</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/resolution.css') }}">

    <!-- Styles -->

</head>
<body>
<div id="container">
@yield('page-content')
</div>
<script src="{{asset('bower_components/angular/angular.js')}}" type="text/javascript"></script>
<script src="{{asset('bower_components/angular/app.js')}}" type="text/javascript"></script>
<script src="{{asset('bower_components/angular-route/angular-route.js')}}" type="text/javascript"></script>

<!--  Controllers -->
<script src="{{asset('bower_components/angular/controller/UserPage.js')}}"></script>
<script src="{{asset('bower_components/angular/controller/Pages.js')}}"></script>
<script src="{{asset('bower_components/angular/controller/HomeCtrl.js')}}"></script>
<!--  -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

