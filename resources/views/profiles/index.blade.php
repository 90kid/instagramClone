@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <a href="{{$user->profile->profileImageNormal()}}">
                    <img class="rounded-circle w-100" style="height: 200px; width: 200px"
                         src="{{$user->profile->profileImageResize()}}"/>
                </a>
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline ">
                    <div class="d-flex align-items-center">
                        <h1>{{$user->username}}</h1>
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/post/create">Add new post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{$postCount}} </strong> {{$postCount == 1 ? 'post' : 'posts'}}</div>
                    <div class="pr-5"> {{$followersCount}} {{$followersCount == 1 ? 'follower': 'followers'}} </div>
                    <div class="pr-5"><strong>{{$followingCount}}</strong> following</div>
                </div>
                <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a href="{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pt-3">
                    <a href="/post/{{$post->id}}">
                        <img class="w-100" src="{{$post->postImageResize()}}"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
