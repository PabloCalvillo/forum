<?php

namespace forum\Http\Controllers;

use Illuminate\Http\Request;
use forum\Forum;

class ForumController extends Controller
{
    public function index() {
        $forums = Forum::with(['posts'])->orderBY('id', 'desc')->paginate(5);
        return view('forums.index', compact('forums'));
    }

    public function show(Forum $forum) {
        //dd($forum);
        $posts = $forum->posts()->with(['owner'])->paginate(2);
        //dd($posts);
        return view('forums.detail', compact('forum', 'posts'));
    }
}
