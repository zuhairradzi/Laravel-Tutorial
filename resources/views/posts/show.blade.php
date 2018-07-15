@extends('layouts.app')

@section('content')
    <a href ="/posts" class="btn btn-default">Go Back </a>
    <div class="container">
        
        <h1>{{$post->title}}</h1>
        <h3>{{$post->body}}</h3>
        <div class="col-md-4 col-sm-4">
                <img style="width:100px;" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
        <small>Written on {{$post->created_at}}</small>
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}

                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close() !!}
        @endif
    @endif
@endsection