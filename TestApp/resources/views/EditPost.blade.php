@extends('layouts.FrontendLayouts')
@section('title', 'Add Post')
@section('content')
<section>
    <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
            <div class="card-header">Edit Post</div>
            <div class="card-body">
                @if (session()-> has('msg'))
                    <div class="alert alert-success">{{ session('msg') }}</div>
                @endif

                <form action="" method="POST">
                    @csrf
                    <input value="{{ $post->title }}"type="text" name="title" placeholder="Post Title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input value="{{ $post->detail }}" type="text" name="detail" placeholder="Post Detail" class="form-control mb-2">
                    @error('detail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input value="{{ $post->author }}" type="text" name="author" placeholder="Author" class="form-control mb-2">
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section> 
@endsection



