<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->with('user')->paginate(10);
        return view('post.index', compact('posts'));
    }

    public function store(PostFormRequest $request)
    {
        $validated = $request->validated();
        Post::create([
            'message' => $validated['message'],
            'user_id' => Auth::user()->id
        ]);
        
        return back()->with('success', 'message posté !');
    }

    public function like(Int $post_id)
    {
        /* 
        |--------------------
        |   First, check if we already liked this post
        |   If we have, remove the like
        |   Else insert the like
        |--------------------
        */
        $post = Post::find($post_id);
        if(count($post->likes) > 0 && $post->liked()) {
            Like::where('likeable_type', 'App\Models\Post')->where('likeable_id', $post->id)->delete();
            return back()->with('success', 'Post retiré des likes avec success');
        }
        $like = new Like();
        $like->user_id = Auth::user()->id;
        $post->likes()->save($like);
        
        return back()->with('success', 'Post liké avec success');
    }
}
