@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flos9-1.fna.fbcdn.net/vp/3fa9ff9804250ee73c14eee32c2d1510/5D873735/t51.2885-19/s150x150/44380660_1907195609589123_1796428255473958912_n.jpg?_nc_ht=instagram.flos9-1.fna.fbcdn.net" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-5"><strong>400</strong> Followers</div>
                <div class="pr-5"><strong>137</strong> Following</div>
            </div>
            <div class="pt-2 font-weight-bold d-flex justify-content-between align-item-baseline">
                {{$user->profile->title}}
                @can('update',$user->profile)
                <a href="{{route('post.create')}}" class="btn btn-primary sm" style="border-radius: 0px;">Add New Post</a>
            @endcan
            </div>
            @can('update',$user->profile)
                <a href="{{route('profile.edit',$user->id)}}" class="badge badge-primary p2" style="border-radius: 0px; padding: 0.27em 0.5em">Edit Profile</a>
            @endcan
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        @foreach($user->posts as $posts)
            <div class="col-4 pb-4">
                <a href="{{(route('post.show',$posts->id))}}"><img src="/storage/{{$posts->image}}" class="w-100" alt=""></a>
            </div>
        @endforeach
    </div>
</div>
@endsection