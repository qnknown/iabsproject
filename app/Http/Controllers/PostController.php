<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function index($postId) {
        $post = Post::find($postId);
        return view('post')->with([
            'post' => $post
        ]);
    }
    
    public function addComment(Request $request) {
        $data = $request->all();
        
        $comment = new Comment();
        $comment->text = $data['text'];
        $comment->post_id = $data['postId'];
        $comment->save();
        
        return response()->json($comment);
    }
}
