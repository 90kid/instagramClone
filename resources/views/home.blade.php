@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" style="height: 200px; width: 200px" src="https://upload.wikimedia.org/wikipedia/commons/d/de/Windows_live_square.JPG"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"> <strong>d</strong> </div>
                <div class="pr-5"> <strong>d</strong> </div>
                <div class="pr-5"> <strong>d</strong> </div>
            </div>
            <div class="pt-5 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}">{{$user->profile->url ?? 'N/A'}}</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.45.1200.1200a/s640x640/106145934_1126977754346770_8220164925137662043_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=1&_nc_ohc=H2j1UuunicgAX9nGf-a&oh=d41901aad77bfcab05d64f9d0a6c0e65&oe=5F2BE861"/>
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.45.1200.1200a/s640x640/106145934_1126977754346770_8220164925137662043_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=1&_nc_ohc=H2j1UuunicgAX9nGf-a&oh=d41901aad77bfcab05d64f9d0a6c0e65&oe=5F2BE861"/>
        </div>
        <div class="col-4">
            <img class="w-100" src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.45.1200.1200a/s640x640/106145934_1126977754346770_8220164925137662043_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_cat=1&_nc_ohc=H2j1UuunicgAX9nGf-a&oh=d41901aad77bfcab05d64f9d0a6c0e65&oe=5F2BE861"/>
        </div>
    </div>
</div>
@endsection
