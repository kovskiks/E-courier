@extends('layouts.app')

@section('content')

    @if(count($posts)>0)
       @foreach($posts as $post)
               <div class="well">
               <a href="posts/{{$post->id}}"><h1>{{$post->title}}</h1></a>
               <small>{{$post->created_at}}</small>
               <h4>{{$post->body}}</h4>
               </div>
       @endforeach
    @else
    <p>No Post</p>
    @endif

@endsection