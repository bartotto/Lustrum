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
        $users = User::orderBy('last_login', 'desc')->get();
        return view('admin', compact('users'));
        }
        
    public function budget() {
        setlocale(LC_MONETARY, 'nl_NL');
        $joiners = User::where('joins', '1')->whereHas('roles', function($q){
            $q->where('description', 'Member');
            })
            ->orderBy('first_name')->get();
        return view('budget', compact('joiners'));
        }
    }
