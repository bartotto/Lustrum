<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment) {
        return view('comments.show', compact('comment'));
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment) {
        $comment = Comment::find($comment->id);
        return view('comments.edit', compact('comment'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment, Post $post) {
        $request->validate([
        'title' => 'required|min:4|max:100',
        'body' => 'required|min:4|max:5000',
        ]);
        $comment = Comment::find($comment->id);
        /* $comment->user_id = auth()->user()->id; */
        $comment->title = $request->get('title');
        $comment->body = $request->get('body');
        /* $comment->post_id = $post->id; */
        $comment->save();
        return redirect('/posts')->with('success', trans('info.comment_update_success').$comment->title.trans('info.post_update_success2'));
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment) {
        $comment = Comment::find($comment->id);
        $comment->delete();
        return redirect('/posts')->with('success', trans('info.comment_update_success').$comment->title.trans('info.post_delete_success'));
        }
}
