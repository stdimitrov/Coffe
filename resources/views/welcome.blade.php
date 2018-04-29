@extends('layouts.header')


<div class="content">

    @include('layouts.menu')
    <h1>welcome page</h1>
    <div>
        <div ng-controller="myController">
            <h3></h3>
            <div ng-view></div>
        </div>
    </div>

</div>

