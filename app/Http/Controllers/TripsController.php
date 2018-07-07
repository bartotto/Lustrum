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
        $directory = "/img/$trip/";
        $filecount = 0;
        $files = glob($directory . "*.jpg");
        if ($files){
            $filecount = count($files);
        }
        return view('trips.show', compact('trip',$filecount));
        }
    }
