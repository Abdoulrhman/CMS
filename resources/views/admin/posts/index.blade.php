@extends('layouts.master')
@section('page_title', 'Posts')
@section('admin_content')
    {{--@if(Session::has('deleted_user'))--}}

        {{--<p class="bg-success">{{session('deleted_user')}}</p>--}}
    {{--@endif--}}

    @if(Session::has('create_post'))

        <p class="bg-success">{{session('create_post')}}</p>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Category</th>
            <th>User</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created-at</th>
            <th>Updated-at</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" class="img-rounded" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
            @endforeach


        @endif
        </tbody>
    </table>
@endsection