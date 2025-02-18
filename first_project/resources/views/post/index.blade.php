@extends('layouts.main')
@section('content')

<div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id)}}"> {{ $post->id }}. {{ $post->title }} </a></div>
        @endforeach
</div>
<div>
    {{ $posts->withQueryString()->links() }}
</div>
<div>
    <button type="button" class="btn btn-primary mb-3"><a href="{{ route('post.create') }}">Add another one</a></button>
</div>
@endsection