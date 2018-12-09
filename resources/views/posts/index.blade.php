@extends('layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>
    @if(count($posts) > 0)
            <div class="card-columns">
            @foreach($posts as $post)
                        <div class="card">
                            <img class="card-img-top"
                                 src="/storage/cover_images/{{$post->user_id}}/{{$post->cover_image}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                                <p class="card-text">{!!str_limit($post->body, 200)!!}</p>
                            </div>
                            <div class="card-footer">
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                        </div>
            @endforeach
            </div>
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection