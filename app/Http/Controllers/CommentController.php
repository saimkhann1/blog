<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'comment' => 'required|string'
        ]);
        $post->comments()->create(
            [
                'comment' => $request->comment,
                // 'post_id' => $post->id, 
                'user_id' => 1,
            ]
        );
        return back()->with('success', 'Comment posted');
    }
}
