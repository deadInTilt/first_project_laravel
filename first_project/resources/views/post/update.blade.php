@extends('layouts.main')
@section('content')

<div>
    <div> {{ $post->id }}. {{ $post->title }} </div>
    <div> {{ $post->post_content }} </div>
</div>
<div>
        <a href="{{ route('post.index') }}">Back</a>
</div>
@endsection