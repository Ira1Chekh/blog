<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'text' => 'required'
        ]);

        $comment = Comment::add($request->all());
        $comment->setPost($request->get('post_id'));

        return redirect()->back()->with('status', 'Ваш комментарий скоро будет добавлен.');
    }
}
