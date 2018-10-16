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
        'name', 'first_name', 'dob', 'email', 'password', 'home_address', 'home_postalcode', 'home_city', 'home_country', 'home_tel', 'mobile',
        'partner', 'partner_first_name', 'partner_email', 'partner_mobile', 'partner_visible', 'partner_login',
        'size', 'strandborrel', 'previous_last_login', 'last_login'
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
    
    /**
     * The roles that belong to the user.
     */
    public function roles(){
        return $this->belongsToMany('App\Role');
        }
        
    public function hasRole($description) {
        foreach ($this->roles as $role) {
            if ($role->description == $description) return true;
            }
        return false;
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
        return $this->belongstoMany('App\Trip');
        }
        
    public function joinedTrip($destination) {
        foreach ($this->trips as $trip) {
            if ($trip->destination == $destination) return true;
            }
        return false;
        }
        
    }
