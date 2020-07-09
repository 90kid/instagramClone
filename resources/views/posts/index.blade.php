@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row d-flex justify-content-center">
                <div class="col-8 ">
                    <a href="/post/{{$post->id}}">
                        <img src="{{ $post->postImageResize() }}" class="w-100">
                    </a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-8 offset-2">
                    <div >
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
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
