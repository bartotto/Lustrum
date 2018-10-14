<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Session;
use App\User;
use App\Role;
use App\Trip;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class UsersController extends Controller {
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $users = User::whereHas('roles', function($q){
            $q->where('description', 'Member');
            })
            ->orderBy('name')->get();
        return view('users.index', compact('users'));
        }
        
    public function show(User $user) {
        $roles = $user->roles()->orderBy('description')->get();
        return view('users.show', compact('user','roles'));
        }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
        }
        
    public function edit_partner(User $user) {
        return view('users.edit_partner', compact('user'));
        }
        
    public function edit_other(User $user) {
        return view('users.edit_other', compact('user'));
        }
        
    public function update(Request $request, User $user) {  
        $validatedData = $request->validate([
            'dob' => 'date'
            ]);
        $old_name = $user->name;
        $user->update($request->all());
        $roles = $user->roles()->orderBy('description')->get();
        if($user->name <> $old_name){
            return view('users.show', compact('user', 'roles'))->with('success', trans('info.user_update_success'));
            }
        else {
            return view('users.show', compact('user', 'roles'));
            }
        }
        // ->with('success', trans('info.post_update_success').$post->title.trans('info.post_update_success2'));
        
    public function joiners(Trip $trip) {
        Log::info($trip);
        $dest = $trip->destination;
        Log::info($dest);
        $joiners = User::whereHas('trips', function($qt){
                $qt->where('destination', 'Georgia');
                })
            ->orderBy('name')->get();    
        return view('joiners', compact('joiners'));
        }
        
    }
