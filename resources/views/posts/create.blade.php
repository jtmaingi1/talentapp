@extends('layouts.app')

@section('content')
    <h1> Create a New Post </h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Post Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Post Details')}}
            {{Form::textarea('body','',['class'=>'form-control', 'placeholder'=>'Post Details'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
   
@endsection