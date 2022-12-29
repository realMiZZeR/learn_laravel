@extends('layouts.main')

@section('content')
<div class="container">
  <form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="Enter content">{{ $post->content }}</textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" class="form-control" name="image" id="image" placeholder="Enter image" value="{{ $post->image }}">
    </div>
    <div class="">
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('post.index') }}" class="btn btn-danger">Cancel</a>
    </div>
  </form>
</div>
@endsection