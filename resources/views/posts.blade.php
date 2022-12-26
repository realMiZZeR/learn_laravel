@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>
      Posts
    </h1>
    @foreach($posts as $post)
      <p>{{ $post->title }}</p>
    @endforeach
  </div>
@endsection