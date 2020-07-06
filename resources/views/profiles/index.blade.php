@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height: 200px; width: 200px" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Windows_live_square.JPG"/>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline ">
                <h1>{{$user->username}}</h1>
                <a href="/post/create">Add new post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>

            <div class="d-flex">
                <div class="pr-5"> <strong>{{$user->posts->count()}}</strong> </div>
                <div class="pr-5"> 3 </div>
                <div class="pr-5"> <strong>d</strong> </div>
            </div>
            <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4">
            <a href="/post/{{$post->id}}">
                <img class="w-100" src="/storage/{{$post->image}}"/>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
