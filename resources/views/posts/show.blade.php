@extends('layouts/master')

@section('title', 'Show')



  @section('content')

    <div class="col-sm-8 blog-main">
     <h1>{{ $post->title }}</h1>
     {{ $post->body }}

      <div class="comments">
        @foreach($post->comments as $comment)
      </div>
    </div>

  @endsection


