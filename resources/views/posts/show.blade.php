@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="{{ $post->postImageNormal() }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImageResize()}}" class="rounded-circle w-100"
                                 style="max-width: 70px;">
                        </div>
                        <div>
                            <div class="d-flex font-weight-bold">
                                <a class="pt-2" href="/profile/{{ $post->user->username }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <follow-button user-id="{{$post->user->username}}" follows="{{$follows}}"></follow-button>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->username }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->title }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
