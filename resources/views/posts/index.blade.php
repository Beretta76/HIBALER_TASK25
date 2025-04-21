@extends('layout')

@section('content')
    <h1 class="mb-4">All Posts</h1>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{ Str::limit($post->body, 150) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">Read More</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this post?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
