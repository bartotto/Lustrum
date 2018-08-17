<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class UsersController extends Controller {
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $users = User::orderBy('name')->get();
        return view('users.index', compact('users'));
        }
        
    public function show(User $user) {
        return view('users.show', compact('user'));
        }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
        }
        
    public function edit_partner(User $user) {
        return view('users.edit_partner', compact('user'));
        }
        
    public function update(Request $request, User $user) {
        $validatedData = $request->validate([
            'dob' => 'date'
            ]);
        $user->update($request->all());
        return view('users.show', compact('user'));
        }
        
    public function joiners() {
        $users = User::orderBy('name')->get();
        return view('joiners', compact('users'));
        }
        
    }
