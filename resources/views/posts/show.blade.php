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
                  <hr>
                  <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> EDIT </a>
                  {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class' => 'float-right','onsubmit' => 'return confirmDelete()'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                  {!!Form::close()!!}
                  </div>
              </div>
    </div>
    <script>
            function confirmDelete(){
            return confirm('Are you sure you want to Delete?');
            }
            </script>  
@endsection