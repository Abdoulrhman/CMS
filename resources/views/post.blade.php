@extends('layouts.temp')
@section('content')
    <!--Blog Starts Here-->
    <section id="emp_blog">
        <div class="detail_banner padding_t">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 text-center">

                        @if(Session::has('comment_message'))

                            <div class="alert alert-success alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success! </strong>{{session('comment_message')}}
                            </div>




                        @endif
                        <h2 class="bottom25">{{$post->title}}</h2>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="metas heading_space">
                                    <span class="by">by: </span>
                                    <span class="metatext">{{$post->user->name}}</span>
                                    <span class="by">on: </span>
                                    <span class="metatext">{{$post->created_at}}</span>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="image bottom25">
                            <img src="{{$post->photo->file}}" alt="blog">
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="blog_text padding_b">
                        <p class="bottom40">{{$post->body}}</p>

                        <!-- Comments Form -->
                        @if(Auth::check())

                        <div class="well">
                           {!! Form::open(['method'=>'POST', 'action'=>'CommentsController@store']) !!}

                          <input type="hidden" name="post_id" value="{{$post->id}}">

                           <div class="form-group">

                               {!! Form::label('body', 'Leave a Comment:') !!}
                               {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>4]) !!}
                           </div>
                           <div class="form-group">
                               {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                           </div>


                           {!! Form::close() !!}
                        </div>
                        @endif

                        <hr>

                        <!-- Posted Comments -->

                        <!-- Comment -->
                        @if(count($comments)>0)
                            @foreach($comments as $comment)
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img height="64" class="media-object" src="{{$comment->photo}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$comment->author}}
                                    <small>{{$comment->created_at->diffForHumans()}}</small>
                                </h4>
                                {{$comment->body}}


                            @if(count($comment->replies)>0)

                                @foreach($comment->replies as $reply)
                            <!-- Nested Comment -->

                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img height="64" class="media-object" src="{{$reply->photo}}" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$reply->author}}
                                            <small>{{$reply->created_at->diffForHumans()}}</small>
                                        </h4>
                                        {{$reply->body}}
                                    </div>

                                    <div class="comment_replay_container">
                                        <button class="toggle_replay btn btn-primary pull-right">Replay</button>
                                        <div class="comment_replay">

                                    {!! Form::open(['method'=>'POST', 'action'=>'CommentRepliesController@createReplay']) !!}


                                    <div class="form-group">
                                        <input type="hidden" name="comment_id" value="{{$comment->id}}">

                                        {!! Form::label('body', 'Body:') !!}
                                        {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>2]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Replay', ['class'=>'btn btn-primary']) !!}
                                    </div>


                                    {!! Form::close() !!}
                                </div>
                                    </div>
                                <!-- End Nested Comment -->
                            @endforeach
                                @endif
                            </div>
                        </div>
                        </div>
                            @endforeach
                        @endif


                        <div class="sharepost clearfix bottom50">
                            <div class="pull-left top10"><p><strong>SHARE THIS POST</strong></p></div>
                            <div class="pull-right">
                                <ul class="socialsimple">
                                    <li><a href="#."><i class="icon-facebook-1"></i> </a> </li>
                                    <li><a href="#."><i class="icon-twitter-1"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blognav">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="prevpost" href="#.">
                                        <span><i class="fa fa-angle-left"></i> &nbsp;previous reading </span>
                                        <h4 class="top15">Fashion Styles of the Week </h4>
                                    </a>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a class="prevpost" href="#.">
                                        <span> previous reading &nbsp; <i class="fa fa-angle-right"></i></span>
                                        <h4 class="top15">Fashion Styles of the Week </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>
    <!--Blog Ends here-->



@stop

@section('scripts')
    <script>

        $(".comment_replay_container .toggle_replay").click(function (){

           $(this).next().slideToggle('slow');
        });

    </script>

    @stop