@extends('layouts.master')
@section('page_title', 'Create Categories')
@section('admin_content')
    <div class="row">
        <div class="col-sm-8">
    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['CategoriesController@update' , $category->id]]) !!}

    <div class="form-group">

        {!! Form::label('name', 'Category Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>


    {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['CategoriesController@destroy',$category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6  ']) !!}
            </div>


            {!! Form::close() !!}
        </div>

    </div>


@endsection