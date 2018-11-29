<?php

namespace forum\Http\Controllers;

use Illuminate\Http\Request;
use forum\Forum;

class ForumController extends Controller
{
    public function index() {
        $forums = Forum::with(['posts', 'replies'])->orderBY('id', 'desc')->paginate(2);
        return view('forums.index', compact('forums'));
    }

    public function show(Forum $forum) {
        //dd($forum);
        $posts = $forum->posts()->with(['owner'])->paginate(2);
        //dd($posts);
        return view('forums.detail', compact('forum', 'posts'));
    }

    public function store(Forum $forum) {
        $this->validate(request(), [ 'name' => 'required|max:100|unique:forums', // forums es la tabla dónde debe ser único 
        'description' => 'required|max:500', ]);
        Forum::create(request()->all());
        return back()->with('message', ['success', __("Foro creado correctamente")]);
    }
}
