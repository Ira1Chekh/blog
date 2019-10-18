<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComment;
use Auth;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(StoreComment $request){
        $comment = Comment::add($request->validated());
        $comment->setPost($request->get('post_id'));

        return redirect()->back()->with('status', 'Ваш комментарий скоро будет добавлен.');
    }
}
