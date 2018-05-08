@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($coffes as $coffe)
        <div class="coffeShow">
            <ul class="coffeShowUl">
                <li class="coffeShowli"><span>{{$coffe->sort}}</span></li>
                <li class="coffeShowli"><span>{{$coffe->variety}}</span></li>
                <li class="coffeShowli"><span>{{$coffe->country}}</span></li>
                <li class="coffeShowli"><span>{{$coffe->description}}</span></li>
            </ul>

        </div>

    @endforeach
@endsection
