<?php

namespace forum\Http\Controllers;
use forum\Rules\ValidReply;
use forum\Reply;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store() { 
        $this->validate(request(), [ 
            'reply' => ['required', new ValidReply] 
            ]); 
            Reply::create(request()->input());
            return back()->with('message', ['success', __('Respuesta añadida correctamente')]);
    }
}
