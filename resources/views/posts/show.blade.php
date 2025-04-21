@extends('layout')

@section('content')
    <div class="mb-4">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">{{ $post->created_at->format('F j, Y') }}</p>
        <p>{{ $post->body }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
@endsection
