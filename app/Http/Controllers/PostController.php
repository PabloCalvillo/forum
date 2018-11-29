<?php

namespace forum\Http\Controllers;

use Illuminate\Http\Request;
use forum\Post;
use forum\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function show(Post $post) {
        $replies = $post->replies()->with('autor')->paginate(2);
        return view('posts.detail', compact('post','replies')); 
    }
    
    public function store(PostRequest $post_request) {
        // $post_request->merge(['user_id' => auth()->id()]);
        Post::create($post_request->input()); // Esto coge todos los datos que vienen vía Post y los inserta 
        return back()->with('message', ['success', __('Post creado correctamente')]);
        
    }
}
