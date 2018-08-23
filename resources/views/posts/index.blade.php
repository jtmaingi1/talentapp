@extends('layouts.app')

@section('content')
    <h1> Talent Showcase </h1>
 
    @if (count($posts)>0)
    <div class="row">
        @foreach ($posts as $post)
    <div class="col-md-6 col-lg-4 py-3">  
        <div class="card">
                <div class="zoom">
                    <img class="card-img-top img-fluid" src="#" alt="Post image">
                </div>
                  <div class="card-body">
                  <h3 class="card-title"><a href="posts/{{$post->id}}"> {{$post->title}}</a></h3>
                  <p class="card-text">{{$post->body}}</p>
                  <hr>
                  <small>Posted on {{$post->created_at}}</small>
                  </div>
              </div>
    </div>
        @endforeach
    </div>
    {{ $posts->links() }}
    @else
        <p> No posts found </p>
    @endif
@endsection