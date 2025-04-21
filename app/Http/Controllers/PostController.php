<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a listing of posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Show the form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Post::create($request->only('title', 'body'));

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    // Show a single post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Show the form to edit an existing post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update the post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($request->only('title', 'body'));

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    // Delete the post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}