@extends('layouts.app')

@section('content')
    <h1> {{$post->title}} </h1>
     <div class="col-lg-12">  
        <div class="card">
                <div class="zoom">
                    <img class="card-img-top img-fluid" src="#" alt="Post image">
                </div>
                  <div class="card-body">
                      <p class="card-text">{{$post->body}}</p>
                      <hr>
                  <small>Posted on {{$post->created_at}}</small>
                  </div>
              </div>
    </div>
       
@endsection