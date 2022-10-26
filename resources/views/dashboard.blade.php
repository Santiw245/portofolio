@extends('layouts.app')
@section('content')
        <div class="card-body">
                @auth
                        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                @endguest
        </div>
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home</h1>
            <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque purus quam,
                imperdiet a accumsan vel, pulvinar ut justo. Curabitur rutrum elit non orci viverra porta.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dolor lectus. 
                Aliquam egestas dapibus nibh. Phasellus et lacus id lectus auctor sagittis. 
                Quisque tristique, lorem in semper dignissim, nisl augue euismod mi, ac tempus sapien 
                mauris ut leo. Morbi quis interdum ex. </p>
        </div>
        </div>
@endsection