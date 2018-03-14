@extends('layouts.master')
@section('page_title', 'Users')
@section('admin_content')
    @if(Session::has('deleted_user'))

        <p class="bg-success">{{session('deleted_user')}}</p>
    @endif

    @if(Session::has('create_user'))

        <p class="bg-success">{{session('create_user')}}</p>
    @endif

    <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
              <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
              <th>Role</th>
              <th>Status</th>
            <th>Created-at</th>
            <th>Updated-at</th>
          </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
              <td><img height="50" class="img-rounded" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
            <td><a href="{!! url('/admin/users/edit', $user->id); !!}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
              <td>{{$user->role ? $user->role->name : 'User has no role '}}</td>
              <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
              <td>{{$user->created_at}}</td>
              <td>{{$user->updated_at->diffForhumans()}}</td>
          </tr>
          @endforeach


        @endif
        </tbody>
    </table>
    @endsection