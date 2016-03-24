<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function store(PostRequest $request)
    {
        $post = Auth::user()->posts()->create($request->input());

        return redirect("/posts");
    }

    public function showAddForm(Request $request)
    {
        return view("blog.new");
    }

    public function all(Request $request)
    {
        $posts = Post::orderBy("created_at" , "desc")->get();
        return view("list.post" , compact('posts'));
    }
}
