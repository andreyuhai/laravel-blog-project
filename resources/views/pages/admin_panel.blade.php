@extends('layouts.app')

@section('title')
    Admin Panel
@endsection

@section('content')
    <h1>{{$title}}</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Post Count</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <th scope="row">{{$user->name}}</th>
                <th scope="row">{{$user->email}}</th>
                <th scope="row">{{$user->posts()->count()}}</th>
                <th scope="row">Delete user</th>
            </tr>
        @endforeach
        <tbody>

        </tbody>
    </table>
    {{$users->links()}}
@endsection