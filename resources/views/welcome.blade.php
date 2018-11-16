@extends('layouts.master')

@section('title', config('app.name', 'Gallery Trudeau'))

@section('body')

<div class="flex-center full-height position-relative">

    <div class="top-right">
        @auth
            <a class="px-4" href="{{ route('home') }}">Home</a>
            <a class="px-4" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a class="px-4" href="{{ route('login') }}">Login</a>
            <a class="px-4" href="{{ route('register') }}">Register</a>
        @endauth
    </div>

    <div class="welcome-top d-md-none h1 m-0 brand">gallery:Trudeau</div>

    <div class="welcome-splash jumbotron jumbotron-fluid row m-0 justify-content-between">


        <div class="col-4 d-none d-md-flex align-items-center justify-content-center">
            <div class="brand">gallery:</div>
        </div>

        <div class="col-4 d-none d-md-flex align-items-center justify-content-center">
            <div class="brand">Trudeau</div>
        </div>

    </div>

    <div class="welcome-links">
        <p><a href="#exhibits">today's exhibits</a></p>
        <a href="#exhibits"><i class="fas fa-arrow-down"></i></a>
    </div>

</div>

<a name="exhibits"></a>
<div class="pt-5">
    @foreach ($exhibits as $exhibit)
        <exhibit-card
            exhibit-json="{{ $exhibit }}"
            user-json="{{ $exhibit->user }}"
            show-url="{{ route('exhibit.show', $exhibit) }}"
            edit-url="{{ Auth::check() ? route('exhibit.edit', $exhibit) : '' }}"
            delete-url="{{ Auth::check() ? route('exhibit.destroy', $exhibit) : '' }}"
            csrf="{{ csrf_token() }}"
        ></exhibit-card>
    @endforeach
</div>

@endsection
