<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller {
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
        }
        
    public function show(User $user) {
        return view('users.show', compact('user'));
        }
        
    public function edit(User $user) {
        return view('users.edit', compact('user'));
        }
        
    public function update(Request $request, User $user) {
        $user->update($request->all());
        return back();
        }
    }
