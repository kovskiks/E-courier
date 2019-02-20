@extends('layouts.app')

@section('content')

   <div class="well">
       <h1>{{$post->title}}</h1>
       <h4>{{$post->body}}</h4>
   </div>

@endsection