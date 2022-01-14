<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCommentRequest;
use App\Http\Requests\PostFormRequest;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at')->with('user', 'comments.user')->get();
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

    public function likePost(Int $post_id)
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

    public function likeComment(Int $comment_id)
    {
        $comment = Comment::find($comment_id);
        if(count($comment->likes) > 0 && $comment->liked()) {
            Like::where('likeable_type', 'App\Models\Comment')->where('likeable_id', $comment->id)->delete();
            return back()->with('success', 'Commentaire retiré des likes avec success');
        }
        $like = new Like();
        $like->user_id = Auth::user()->id;
        $comment->likes()->save($like);
        
        return back()->with('success', 'Commentaire liké avec success');
    }

    public function destroy(Int $post_id)
    {
        Post::where('id', $post_id)->delete();
        return back()->with('success', 'Post retiré avec success');
    }

    public function addComment(AddCommentRequest $request, Int $post_id)
    {
        $validated = $request->validated();
        Comment::create([  
            'user_id' => Auth::user()->id,
            'post_id' => $post_id,
            'comment' => $validated['comment']
        ]);
        return back()->with('success', 'Commentaire posté avec success');
    }
}
