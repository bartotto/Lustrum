<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\User;
use App\Post;
use App\Comment;

class CommentsController extends Controller{
    
    public function __construct() {
        $this->middleware('auth');
        }

    public function store(Request $request, Post $post){
        $this->validate(request(),[
            'title' => 'required|min:4|max:100',
            'body' => 'required|min:4|max:5000',
        ]);
        $comment = new Comment();
        $comment->title = $request->title;
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;
        $post->comments()->save($comment);
        return redirect('/posts');
        }
    }
