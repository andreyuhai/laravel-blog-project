@extends('layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>
    @if(count($posts) > 0)

        @foreach($posts as $post)
            <div class="row">
                <div class="col-12 p-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                            <p class="card-text">{!!str_limit($post->body, 200)!!}</p>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            <a href="/posts/{{$post->id}}" class="btn btn-outline-primary float-right">Continue reading</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection