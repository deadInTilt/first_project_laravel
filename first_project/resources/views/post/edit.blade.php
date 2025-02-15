@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="post_content" class="form-label">Content</label>
      <textarea class="form-control" name="post_content" id="post_content" placeholder="Content">{{ $post->post_content }}</textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{ $post->image }}">
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" id="category" name="category_id">
        @foreach($categories as $category)
        <option
          {{ $category->id === $post->category->id ? ' selected' : '' }}
          value = "{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  <form action="{{ route('post.delete', $post->id) }}" method="post">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-primary">Delete</button>
  </form>
</div>
@endsection