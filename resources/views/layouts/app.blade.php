@extends('layouts.master')

@section('title')
    @yield('page-title') | Gallery Trudeau
@endsection

@section('body')
<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand brand" href="{{ url('/') }}">
            gallery:Trudeau
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (App\Exhibit::all()->count())
        <a class="navbar-brand" href="{{ route('exhibit.index') }}">Exhibits</a>
        @endif

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link bar-link px-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link bar-link px-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link bar-link px-4" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bar-link px-4" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

@if (session('status'))
    <div class="alert alert-success rounded-0 border-0 text-center alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {!! session('status') !!}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger rounded-0 border-0 text-center alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Please fix the errors below.
    </div>
@endif

<main class="py-4">
    @yield('content')
</main>

@endsection
