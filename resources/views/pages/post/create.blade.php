@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
        <div class="card">
            <div class="card-header">Add New Post</div>
                <div class="card-body"> 
                    <form action="{{route('post.store')}}" enctype="multipart/form-data"  method="post">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="image" class="col-md-8 col-form-label ">Image</label>           
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" 
                            name="image" autocomplete="image" style="border-radius: 0px;" autofocus>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                        <div class="form-group row">
                            <label for="caption" class="col-md-8 col-form-label ">Caption</label>           
                            <textarea id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" 
                            name="caption" autocomplete="caption" value="{{ old('caption') }}" style="border-radius: 0px;" autofocus>
                            </textarea>
                            @error('caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>
                        <div class="form-group row pt-3">
                            <button class="btn btn-primary btn-case" style="border-radius: 0px;" type="submit">Add Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection