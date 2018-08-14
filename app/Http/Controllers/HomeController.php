<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
        }
 
    public function luco() {
        return view('luco');
        }
     
    public function georgia() {
        return view('georgia');
        }
    
    public function georgia_map() {
        return view('georgia_map');
        }
        
    public function preparations() {
        return view('preparations');
        }
        
    public function program() {
        return view('program');
        }
        
    public function kenia() {
        return view('trips.kenia');
        }
    public function lappland() {
        return view('trips.lappland');
        }
    public function cameroun() {
        return view('trips.cameroun');
        }
    public function oman() {
        return view('trips.oman');
        }
    public function karpaten() {
        return view('trips.karpaten');
        }
    public function dalarna() {
        return view('trips.dalarna');
        }
    
    public function logout() {
        return view('welcome');
        }
    }
