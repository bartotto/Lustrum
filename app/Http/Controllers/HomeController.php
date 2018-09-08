<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\User;
use App\Http\Controllers\Controller;
    
class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index() {
        $role = auth()->user()->user_role;
        session(['user_role' => $role]);
        return view('home');
        }
   
    public function tamada() {
        return view('tamada');
        }
    
    public function destination() {
        return view('destination');
        }
        
    public function destination_map() {
        return view('destination_map');
        }
        
    public function program() {
        return view('program');
        }
        
    public function tripPhoto() {
        return view('tripPhoto');
        }
    
    public function luco() {
        return view('luco');
        }
    
    public function logout() {
        return view('home');
        }
    }
