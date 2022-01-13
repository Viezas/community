<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->with('user')->get();
        return view('post.index', compact('posts'));
    }

    public function store(PostFormRequest $request)
    {
        dd('Pas encore le system d\'auth');
        $validated = $request->validated();
        Post::create([
            'message' => $validated['message'],
            'user_id' => Auth::user()->id
        ]);
    }
}
