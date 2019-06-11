@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
        <div class="card">
            <div class="card-header">Edit Profile</div>
                <div class="card-body"> 
                    <form action="/profile/{{$user->id}}" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}} @method('PATCH')
                        <div class="form-group row">
                            <label for="title" class="col-md-8 col-form-label ">Title</label>           
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                            value="{{ old('title') ?? $user->profile->title }}" name="title" autocomplete="title" style="border-radius: 0px;" autofocus>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                    
                        <div class="form-group row">
                            <label for="description" class="col-md-8 col-form-label ">Description</label>           
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                                name="description" autocomplete="description"  style="border-radius: 0px;" autofocus>{{ old('description') ?? $user->profile->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                        <div class="form-group row">
                            <label for="url" class="col-md-8 col-form-label ">Website</label>           
                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" 
                            value="{{ old('url') ?? $user->profile->url }}"name="url" autocomplete="url" style="border-radius: 0px;" autofocus>
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-8 col-form-label ">Image</label>           
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" 
                            name="image" autocomplete="image" autofocus>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                        <div class="form-group row pt-3">
                            <button class="btn btn-primary btn-case" style="border-radius: 0px;" type="submit">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection