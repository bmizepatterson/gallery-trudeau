@extends('layouts.app')

@section('page-title', $exhibit->title)

@section('content')

<exhibit-card
    exhibit-json="{{ $exhibit }}"
    user-json="{{ $exhibit->user }}"
    show-url="{{ route('exhibit.show', $exhibit) }}"
    edit-url="{{ Auth::check() ? route('exhibit.edit', $exhibit) : '' }}"
    delete-url="{{ Auth::check() ? route('exhibit.destroy', $exhibit) : '' }}"
    csrf="{{ csrf_token() }}"
></exhibit-card>

@endsection
