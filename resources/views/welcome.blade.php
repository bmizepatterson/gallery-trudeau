@extends('layouts.master')

@section('title', config('app.name', 'Gallery Trudeau'))

@section('body')

<div class="flex-center full-height position-relative">

    <div class="welcome-top d-md-none h1 m-0 brand">gallery Trudeau</div>

    <div class="welcome-splash jumbotron jumbotron-fluid row m-0 justify-content-between">


        <div class="col-4 d-none d-md-flex align-items-center justify-content-center">
            <div class="brand">gallery</div>
        </div>

        <div class="col-4 d-none d-md-flex align-items-center justify-content-center">
            <div class="brand">Trudeau</div>
        </div>

    </div>

    <div class="welcome-links">
        @auth
            <a href="{{ route('home') }}">Home</a>
        @else
            <a class="px-5" href="{{ route('login') }}">Login</a>
            <a class="px-5" href="{{ route('register') }}">Register</a>
        @endauth
    </div>

</div>

@endsection
