@extends('layouts.master')
@section('page_title', 'Posts')
@section('admin_content')
    @if(Session::has('deleted_post'))

        <p class="bg-success">{{session('deleted_post')}}</p>
    @endif

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
            <th>View Post</th>
            <th>View Comments</th>
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
                    <td><a href="{!! url('/admin/posts/edit', $post->id); !!}">{{$post->user->name}}</a></td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body , 10)}}</td>
                    <td><a href="{!! url('/post',$post->id) !!}">View post</a></td>
                    <td><a href="{!! url('/admin/comments',$post->id) !!}">View comments </a></td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
            @endforeach


        @endif
        </tbody>
    </table>
@endsection