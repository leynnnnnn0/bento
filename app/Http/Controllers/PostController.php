<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments', 'votes')->latest()->get();
        return view('home', ['posts' => $posts]);
    }

    public function store()
    {
        $attribute = request()->validate([
            'body' => 'required',
        ]);
        Auth::user()->posts()->create($attribute);

        return redirect('/');
    }
}
