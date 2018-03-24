@extends('layouts.master')
@section('page_title', 'Media')
@section('admin_content')

    <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
          </tr>
        </thead>
        <tbody>
        @if($photos)
          @foreach($photos as $photo)

          <tr>
            <td>{{$photo->id}}</td>
            <td><img src="{{$photo->file}}" height="50" alt=""></td>
            <td>{{{$photo->created_at ? $photo->created_at : 'No Date'}}}</td>
              <td>
                  {!! Form::open(['method'=>'DELETE', 'action'=>['MediaController@destroy', $photo->id]]) !!}

                  <div class="form-group">
                      {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                  </div>


                  {!! Form::close() !!}


              </td>
          </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    @endsection