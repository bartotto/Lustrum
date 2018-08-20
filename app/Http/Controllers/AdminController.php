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
        $users = User::orderBy('name')->get();
        return view('admin', compact('users'));
        }

    }
