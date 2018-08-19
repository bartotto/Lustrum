<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
    
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
     
    public function destination() {
        return view('destination');
        }
        
    public function preparations() {
        return view('preparations');
        }
        
    public function trip() {
        return view('trip');
        }
        
    public function kenya() {
        return view('trips.kenya');
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
    public function carpathians() {
        return view('trips.carpathians');
        }
    public function dalarna() {
        return view('trips.dalarna');
        }
    public function georgia() {
        return view('trips.georgia');
        }
    
    public function logout() {
        return view('home');
        }
    }
