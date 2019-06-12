@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="w-100 rounded-circle" alt="{{$user->profile->title}}">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{$user->username}}</div>
                <button class="btn btn-primary btn-sm ml-4 mb-2" style="border-radius: 0px;" >Follow</button>
            </div>
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
                <a href="{{route('profile.edit',$user->id)}}" class="badge btn badge-primary p-1" style="border-radius: 0px;">Edit Profile</a>
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