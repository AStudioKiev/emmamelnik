<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PageComment;
use App\Post;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function consultancies()
    {
        return view('consultancies');
    }

    public function blog()
    {
        $posts = Post::orderBy('counter')->get();
        return view('blog', compact('posts'));
    }

    public function article($id)
    {
        $post = Post::find($id);
        $post->counter++;
        $post->update();

        return view('article', compact('post'));
    }
}
