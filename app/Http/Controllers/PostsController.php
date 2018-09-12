<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Log;
use Session;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Gate;
use App\Events\newBlogPost;

class PostsController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $posts = Post::latest()
                ->filter(request()->only(['month', 'year']))
                ->get();
        return view('posts.index', compact('posts'));
        }
        
    public function show(Post $post) {
        return view('posts.show', compact('post'));
        }
    
    public function create() {
        return view('posts.create');
        }
        
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|unique:posts|min:4|max:100',
            'body' => 'required|min:4|max:5000',
            ]);
        $post = new Post([
            'user_id' => auth()->user()->id,
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            ]);
        $post->save();
        return redirect('/posts')->with('success', trans('info.post_create_success'));
        }
        
    public function edit($id) {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
        }
    
    public function update(Request $request, $id) {
        $request->validate([
            'title' => 'required|min:4|max:100',
            'body' => 'required|min:4|max:5000',
            ]);
        $post = Post::find($id);
        $post->user_id = auth()->user()->id;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->save();
        return redirect('/posts')->with('success', trans('info.post_update_success').$post->title.trans('info.post_update_success2'));
        }
        
    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', trans('info.post_update_success').$post->title.trans('info.post_delete_success'));
        }

    }