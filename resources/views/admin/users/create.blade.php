@extends('layouts.master')
@section('page_title', 'Add New User')
@section('admin_content')
    {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store', 'files'=>true ]) !!}

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
        {!! Form::select('is_active',array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('photo_id', 'Upload:') !!}
        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

    @include('includes.form_error')
    @endsection