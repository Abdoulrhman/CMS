@extends('layouts.master')
@section('page_title', 'Categories')
@section('admin_content')


<div class="row">
    <div class="col-sm-4">

        {!! Form::open(['method'=>'POST', 'action'=>'CategoriesController@store']) !!}

        <div class="form-group">

            {!! Form::label('name', 'Category Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>


        {!! Form::close() !!}

    </div>

    <div class="col-sm-8">
        <table class="table table-hover">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created_at</th>
                  <th>Updated_at</th>
              </tr>
            </thead>

            <tbody>
            @if($categories)
                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{!! url('/admin/categories/edit', $category->id); !!}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForhumans() : 'No Date'}}</td>
                        <td>{{$category->updated_at ? $category->updated_at->diffForhumans() : 'No Date'}}</td>
                    </tr>

                @endforeach

            @endif
            </tbody>
        </table>

    </div>

</div>
    @endsection