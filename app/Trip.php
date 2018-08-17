<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model {
    
    Public function users() {
        return $this->belongtoMany('App\User');
        }
    }
