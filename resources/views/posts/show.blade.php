@extends('layouts.app')

@section('content')
    <a class="btn btn-sm btn-outline-dark" href="/posts">Go back</a>
    <h1 class="text-center">{{$post->title}}</h1>
    <div class="well">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection