<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $comment = new Comment;
        $comment->post_id = $post->id;
        $comment->body = $request->body;
        return redirect()
        ->route('posts.show', $post);
    }
}
