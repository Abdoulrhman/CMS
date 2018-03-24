@extends('layouts.master')
@section('page_title', 'Comments')
@section('admin_content')
    @if(count($comments) > 0)
    <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
              <th>Body</th>
              <th>Post</th>
              <th>Status</th>
              <th>Drop</th>

          </tr>
        </thead>
        <tbody>
        @foreach($comments as $comment)
        <tr>
            <td>{{$comment->id}}</td>
            <td>{{$comment->author}}</td>
            <td>{{$comment->email}}</td>
            <td>{{$comment->body}}</td>
            <td><a href="{!! url('/post', $comment->post->id) !!}">View Post</a></td>
            <td><a href="{!! url('/admin/comments/replies', $comment->id) !!}">View Replies</a></td>
            <td>

                @if($comment->is_active == 1)

                    {!! Form::open(['method'=>'PATCH', 'action'=>['CommentsController@update', $comment->id]]) !!}
                    <input type="hidden" name="is_active" value="0">

                    <div class="form-group">
                        {!! Form::submit('UnApprove', ['class'=>'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                    @else
                    {!! Form::open(['method'=>'PATCH', 'action'=>['CommentsController@update', $comment->id]]) !!}
                    <input type="hidden" name="is_active" value="1">

                    <div class="form-group">
                        {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                    </div>
                    {!! Form::close() !!}


                    @endif
            </td>
            <td>

                {!! Form::open(['method'=>'DELETE', 'action'=>['CommentsController@destroy', $comment->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>

        @else
        <h3 class="text-center">No comments</h3>
    @endif

@endsection

