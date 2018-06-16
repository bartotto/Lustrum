<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Http\Controllers\Controller;

class TripsController extends Controller {
        
    public function index() {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
        }
        
    public function show(Trip $trip) {
        return view('trips.show', compact('trip'));
        }
    }
