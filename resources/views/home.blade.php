@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
<div class="row justify-content-center">
    <div class="col-11 col-md-8 col-lg-6 mb-5">
        <div class="card">

            <div class="card-body">

                <form method="post" action="{{ route('exhibit.store') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title" name="title" value="{{ old('title') }}" placeholder="Title" autofocus>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" id="url" name="url" value="{{ old('url') }}" placeholder="Image url">
                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-8">
                            <input class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}" id="artist" name="artist" value="{{ old('artist') }}" placeholder="Artist / Photographer">
                            @if ($errors->has('artist'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('artist') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md">
                            <input class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year" name="year" value="{{ old('year') }}" placeholder="Year">
                            @if ($errors->has('year'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('year') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" placeholder="Description" rows="5">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-block btn-primary mt-3">Post exhibit</button>

                </form>
            </div>
        </div>
    </div>
</div>


@if (Auth::user()->exhibits()->count())
    @foreach (Auth::user()->exhibits as $exhibit)
        <exhibit-card
            exhibit-json="{{ $exhibit }}"
            user-json="{{ $exhibit->user }}"
            show-url="{{ route('exhibit.show', $exhibit) }}"
            edit-url="{{ route('exhibit.edit', $exhibit) }}"
            delete-url="{{ route('exhibit.destroy', $exhibit) }}"
            csrf="{{ csrf_token() }}"
        ></exhibit-card>
    @endforeach
@endif

@endsection
