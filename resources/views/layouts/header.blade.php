<!doctype html>
<html ng-app>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coffe</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/resolution.css') }}">

    <!-- Styles -->

</head>
<body>
<div id="container">
@yield('page-content')
</div>
<script src="{{URL::asset('bower_components/angular/angular.js')}}"></script>
<script src="{{URL::asset('bower_components/angular/angular.min.js')}}"></script>
<!--  Controllers -->
<script src="{{URL::asset('bower_components/angular/controller/UserPage.js')}}"></script>
<!--  -->
<script src="{{URL::asset('js/app.js')}}"></script>
<script src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>

