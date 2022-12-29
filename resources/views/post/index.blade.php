@extends('layouts.main')

@section('content')
  <div class="container">
    <div class="d-flex mb-3">
      <a href="{{ route('post.create') }}" class="btn btn-success">Create</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Image</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach ($posts as $post)  
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->content }}</td>
          <td>{{ $post->image }}</td>
          <td class="row">
            <div class="col-4">
              <a href="{{ route('post.show', ['post' => $post->id]) }}" class="btn btn-primary w-100">Show</a>
            </div>
            <div class="col-4">
              <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-warning w-100">Edit</a>
            </div>            
            <form action="{{ route('post.destroy', $post->id) }}" class="col-4" method="post">
              @csrf
              @method('delete')
              <input type="submit" class="btn btn-danger w-100" value="Delete">
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
@endsection