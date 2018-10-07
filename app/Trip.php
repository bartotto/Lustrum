<?php

namespace App;
use App\Trip;

class Trip extends Model {
    
    /**
     * The users that belong to the trip.
     */
    Public function users() {
        return $this->belongsToMany('App\User');
        }
    }
