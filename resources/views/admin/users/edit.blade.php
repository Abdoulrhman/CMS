@extends('layouts.master')
@section('page_title', 'Edit User')
@section('admin_content')
    <div class="row">
    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
<div class="col-sm-9">

    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update',$user->id], 'files'=>true ]) !!}

    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail:') !!}
        {!! Form::email('email', null, ['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password', ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">

        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id',[''=>'choose options'] + $roles , null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active') , null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('photo_id', 'Upload:') !!}
        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary col-sm-8']) !!}
    </div>


    {!! Form::close() !!}

{!! Form::open(['method'=>'DELETE', 'action'=>['UsersController@destroy', $user->id]]) !!}

<div class="form-group">
    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-4']) !!}
</div>


{!! Form::close() !!}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

</div>
    </div>
    @endsection
