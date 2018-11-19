@extends('layouts.app')

@section('page-title', 'Exhibits')

@section('content')

@if ($exhibits->count())

    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-6 pagination-links">
            {{ $exhibits->links() }}
        </div>
    </div>

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

    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-6 pagination-links">
            {{ $exhibits->links() }}
        </div>
    </div>
@endif

@endsection
