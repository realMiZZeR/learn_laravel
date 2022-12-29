@extends('layouts.app')

@section('content')
<div class="container">
  <div class="mb-3">
    <a href="{{ route('post.index') }}" class="btn btn-dark">Back</a>
    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary ml-1">Edit</a>
  </div>
  <h1>{{ $post->title }} <span class="badge">New</span></h1>
  <p>{{ $post->content }}</p>
</div>
@endsection