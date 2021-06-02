<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function postCreate(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return back()->with('post_created', 'Post has been created successfully!');
    }

    public function getPost()
    {
        $posts = Post::orderBy('id', 'ASC')->get();
        return view('posts', compact('posts'));
    }

    public function getPostById($id)
    {
        $post = Post::where('id', $id)->first();
        return view('single-post', compact('post'));
    }
}
