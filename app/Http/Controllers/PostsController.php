<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Log;
use App\User;
use App\Post;

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
    
    public function create(Post $post) {
        return view('posts.create', compact('post'));
        }
    
    public function store() {
        $this->validate(request(),[
           'title' => 'required|unique:posts|min:4|max:255',
           'body' => 'required|min:4',
        ]);
        $user = auth()->user();
        $user->publish(
            new Post(request(['title', 'body']))
            );
        return redirect('/posts');
        }   
    }
