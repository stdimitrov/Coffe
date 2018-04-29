@extends('layouts.header')


<div ng-app>
    @include('layouts.menu')
    <h1>page1</h1>
    <ul class="button_ul">
        <li class="button_li">
            <button ng-click="arabika = !arabika">arabika</button>
        </li>
        <li class="button_li">
            <button ng-click="robusta = !robusta">robusta</button>
        </li>
    </ul>
<div id="page_div">
    <div class="box" ng-show="arabika">
        <div>
            <h3>Арабика</h3>
            <p>Арабика е сорт кафе , характерно със силен и горчив вкус</p>
        </div>
    </div>
    <div class="box" ng-show="robusta"><p>ohh</p></div>
</div>
</div>
