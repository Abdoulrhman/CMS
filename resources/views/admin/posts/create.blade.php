@extends('layouts.master')
@section('page_title', 'Add New Post')
@section('admin_content')
    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true ]) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category-id',[''=>'choose options'] + $categories , null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('photo_id', 'Upload:') !!}
        {!! Form::file('photo_id', null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null , ['class'=>'form-control' , 'rows'=>6 ]) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@include('includes.form_error')
@endsection