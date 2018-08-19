<?php

namespace App;

use App\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'dob', 'email', 'password', 'home_address', 'home_number', 'home_postalcode', 'home_city',
        'home_country', 'home_tel', 'mobile', 'partner', 'partner_email', 'partner_mobile', 'partner_visible', 'user_type', 'size',
        'previous_last_login', 'last_login'
    ];

    protected $dates = ['dob', 'previous_last_login', 'last_login'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function setdobAttribute($date){
        $this->attributes['dob'] = Carbon::parse($date);
        }
    
    protected $hidden = [
        'password', 'remember_token',
        ];
    
    public function posts() {
        return $this->hasMany(Post::class);
        }
        
    public function publish_post(Post $post) {
        $this->posts()->save($post);
        }
        
    public function comments() {
        return $this->hasMany(Comment::class);
        }
        
    public function trips() {
        return $this->belongtoMany(Trip::class)->withTimestamps();
        }
        
    }
