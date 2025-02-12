@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('post.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
      <label for="post_content" class="form-label">Content</label>
      <textarea class="form-control" name="post_content" id="post_content" placeholder="Content"></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" class="form-control" id="image" placeholder="Image">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection