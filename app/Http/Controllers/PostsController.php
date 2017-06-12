<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
    	return view("posts.index", compact('posts'));
    }
    public function create()
    {
    	return view("posts.create");
    }
    public function show(Post $post)
    {
    	return view("posts.show", compact('post'));
    }
    public function store()
    {
        $this->validate(request(), [
            'title'=>'required',
            'body'=>'required'
            ]);
        //Create a post from form
        Post::create(Request(['title', 'body']));

        //Redirect to homepage
        return Redirect("/");
    }
}
