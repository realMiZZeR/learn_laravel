@extends('layouts.main')

@section('content')
<div class="container">
  <form action="{{ route('post.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="Enter content"></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" class="form-control" name="image" id="image" placeholder="Enter image">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection