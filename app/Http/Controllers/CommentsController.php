<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller {

    public function index() {
        //
        }

    public function create() {
        //
        }

    public function store(Request $request, Post $post) {
        $request->validate([
            'title' => 'required|min:4|max:100',
            'body' => 'required|min:4|max:5000',
            ]);
        $comment = new Comment([
            'user_id' => auth()->user()->id,
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'post_id' => $post->id,
            ]);
        $comment->save();
        return redirect('/posts')->with('success', trans('info.comment_create_success'));
        }

    public function show(Comment $comment) {
        return view('comments.show', compact('comment'));
        }

    public function edit(Comment $comment) {
        $comment = Comment::find($comment->id);
        return view('comments.edit', compact('comment'));
        }

    public function update(Request $request, Comment $comment, Post $post) {
        $request->validate([
            'title' => 'required|min:4|max:100',
            'body' => 'required|min:4|max:5000',
            ]);
        $comment = Comment::find($comment->id);
        $old_title = $comment->title;
        $old_body = $comment->body;
        $comment->title = $request->get('title');
        $comment->body = $request->get('body');
        $comment->save();
        if($comment->title <> $old_title || $comment->body <> $old_body){
            return redirect('/posts')->with('success', trans('info.comment_update_success').$comment->title.trans('info.post_update_success2'));
            }
        else {
            return redirect('/posts');
            }
        }

    public function destroy(Comment $comment) {
        $comment = Comment::find($comment->id);
        $comment->delete();
        return redirect('/posts')->with('success', trans('info.comment_update_success').$comment->title.trans('info.post_delete_success'));
        }
}
