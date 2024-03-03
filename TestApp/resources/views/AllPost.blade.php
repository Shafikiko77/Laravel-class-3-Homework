@extends('layouts.FrontendLayouts')
@section('title', 'All Post')
@section('content')


<div class="container mt-5 text-center">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Author</th>
            </tr>
            @foreach ( $posts as $key=>$post)  
            <tr>
                <td>{{$posts->firstItem()+$key}}</td>
                <td>{{$post->title}}</td>
                <td>{{str($post->detail)->substr(0,10)->lower(). '...'  }} </td>
                <td>{{$post->author}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-sm btn-warning" href= {{route('edit',$post->id)}} >Edit</a>
                        <a class="btn btn-sm btn-danger" href={{ route('delete',$post->id) }}>Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{$posts->links()}}
    </div> 
</div>
@endsection


