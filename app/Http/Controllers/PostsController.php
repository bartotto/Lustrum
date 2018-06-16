<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Mail\new_post;

class PostsController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $posts = Post::latest()
                ->filter(request()->only(['month', 'year']))
                ->filter(request()->only('tag'))
                ->get();
        return view('posts.index', compact('posts'));
        }
        
    public function show(Post $post) {
        return view('posts.show', compact('post'));
        }
    
    public function create(Post $post) {
        return view('posts.create', compact('post'));
        }
    
    public function store() {
        $this->validate(request(), [
            'title'     => 'required|min:4',
            'body'      => 'required|min:4'
        ]);
        
        $user = auth()->user();
        $user->publish(
            new Post(request(['title', 'body']))
            );
        
        \Mail::to($user)->send(new new_post($user));
        
        return redirect('/posts');
        }   
    }
