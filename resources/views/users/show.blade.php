@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ Auth::user()->name }}</h3>
                </div>
                <div class="panel-body">
                    <p>{{ Auth::user()->email }}</p>
                
                </div>
            </div>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">Microposts</a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
        </div>
    </div>
@endsection