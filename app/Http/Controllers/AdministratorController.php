<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdministratorController extends Controller {
    public function __construct() {
        $this->middleware('auth');
        }
        
    public function index() {
        $users = User::orderBy('name')->get();
        $roles = Role::orderBy('description')->get();
        return view('administrator.index', compact('users', 'roles'));
        }
        
    public function show(User $user) {
        $roles = $user->roles()->orderBy('description')->get();
        return view('administrator.role', compact('user', 'roles'));
        }
        
    public function show_for_role(Role $role) {
        Log:info($role);
        $users = $role->users()->orderBy('first_name')->get();
        return view('administrator.role2', compact('role', 'users'));
        }
        
    }
