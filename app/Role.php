<?php

namespace App;
use App\Role;

class Role extends Model {
    
    protected $fillable = [
        'description'
        ];
        
    /**
     * The users that belong to the role.
     */
    public function users(){
        return $this->belongsToMany('App\User');
        }
    
    }