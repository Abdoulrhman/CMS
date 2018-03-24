@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endsection


@section('page_title', 'Upload Media')



@section('admin_content')


{!! Form::open(['method'=>'POST', 'action'=>'MediaController@store', 'class'=>'dropzone' , 'id'=>'my-awesome-dropzone']) !!}



{!! Form::close() !!}

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
    @endsection