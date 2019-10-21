@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body my-2">
                <div class="row">
                    <div class="col-md4 col-sm4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>
                    <div class="col-md8 col-sm8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Writen on {{$post->created_at}} by {{$post->user['name']}}</small>  
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif

@endsection