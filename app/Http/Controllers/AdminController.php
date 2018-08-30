<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdminController extends Controller {
    public function __construct() {
        $this->middleware('auth');
        }
        
    public function index() {
        $users = User::orderBy('first_name')->get();
        return view('admin', compact('users'));
        }
        
    public function budget() {
        $users = User::where([
            ['joins','=','1'],
            ['user_role','<>','Partner'],
            ['user_role','<>','Guide']            
            ])->orderBy('first_name')->get();
        return view('budget', compact('users'));
        }
    }
