@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/post" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label ">{{ __('Caption') }}</label>

                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                               name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label ">{{ __('Caption') }}</label>
                        <input type="file" class="form-control-file" name="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <input type="submit" class="" value="Add Post">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
