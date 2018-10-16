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
            'name' => 'min:2',
            'first_name' => 'min:2',
            'dob' => 'date|before:today|nullable',
            'email' => 'unique:users,email,'.$user->id,
            'home_postalcode' => 'max:7'
            ]);
        $old_user_updated_at=$user->updated_at;  
        $user->update($request->all());
        $roles = $user->roles()->orderBy('description')->get();
        if($user->updated_at <> $old_user_updated_at) {
            return redirect()->route('users.show', compact('user', 'roles'))->with('success', trans('info.update_success'));
            }
        else {
            return redirect()->route('users.show', compact('user', 'roles'))->with('danger', trans('info.update_nothing'));
            }
        }
        
    public function joiners(Trip $trip) {
        $dest = $trip->destination;
        $joiners = User::whereHas('trips', function($qt){
                $qt->where('destination', 'Georgia');
                })
            ->orderBy('name')->get();    
        return view('joiners', compact('joiners'));
        }
        
    }
