<?php

namespace App;

use App\Trip;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts() {
        return $this->hasMany(Post::class);
        }
        
    public function publish(Post $post) {
        $this->posts()->save($post);
        }
        
    public function trips() {
        return $this->belongstoMany(Trip::class)->withTimestamps();
        }

}
