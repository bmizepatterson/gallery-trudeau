@extends('layouts.app')

@section('page-title', 'Edit exhibit')

@section('content')

<div class="row justify-content-center">
    <div class="col-11 col-md-8 col-lg-6 mb-5">
        <div class="card exhibit-image-container">

            <div class="exhibit-image" style="backgroundImage: url('{{ $exhibit->url }}');">
                <a href="{{ $exhibit->url }}" target="_blank" rel="noopener noreferrer"></a>
            </div>

            <div class="card-header">
                <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" form="edit-form" id="title" name="title" value="{{ $errors->has('title') ? old('title') : $exhibit->title }}" placeholder="Title">
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>

            <div class="card-body">
                <form method="post" id="edit-form" action="{{ route('exhibit.update', $exhibit) }}">
                    @csrf
                    @method("PUT")

                    <div class="form-group">
                        <input class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" id="url" name="url" value="{{ $errors->has('url') ? old('url') : $exhibit->url }}" placeholder="Image url">
                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-8">
                            <input class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}" id="artist" name="artist" value="{{ $errors->has('artist') ? old('artist') : $exhibit->artist }}" placeholder="Artist / Photographer">
                            @if ($errors->has('artist'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('artist') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md">
                            <input class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year" name="year" value="{{ $errors->has('year') ? old('year') : $exhibit->year }}" placeholder="Year">
                            @if ($errors->has('year'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('year') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" name="description" placeholder="Description" rows="5">{{ $errors->has('description') ? old('description') : $exhibit->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-row mt-3">
                        <div class="col-4">
                            <a href="{{ route('home') }}" class="btn btn-block btn-outline-light">Cancel</a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-block btn-info">Save exhibit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
