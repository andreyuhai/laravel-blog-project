@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="text-center">Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <thead>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="{{url('/posts/'.$post->id)}}">{{$post->title}}</a></td>
                                    <td><a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-outline-dark">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning" role="alert">
                            You don't have any posts yet :(
                        </div>
                    @endif
                    <a href="{{url('/posts/create')}}" class="btn btn-outline-primary float-right">Create Post</a>
                </div>
            </div>
        </div>
    </div>
@endsection
