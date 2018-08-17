<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Log;
use App\User;
use App\Trip;

class TripsController extends Controller {
    
    public function __construct() {
        $this->middleware('auth');
        }
    
    public function index() {
        $trip = App\Trip::find(1);
        foreach ($Trip->users as $user) {
            $joiner[] = $user;
            }
        return view('trips.index', compact('trips'));
        }
        
    public function show(Trip $trip) {
        return view('trips.show', compact('trip'));
        }
    }
