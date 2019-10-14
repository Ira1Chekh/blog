<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status',1)->paginate(10);
        return view('pages.index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('post'));
    }

    public function tag($slug){
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $posts = $tag->posts()->where('status',1)->paginate(2);
        return view('pages.list',compact('posts'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->firstOrFail();
        $posts = $category->posts()->where('status',1)->paginate(2);
        return view('pages.list',compact('posts'));
    }
}
