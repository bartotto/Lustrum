<?php

namespace App\Listeners\Users;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateLastLogin{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){
        //
        }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event){
        if($event->user->last_login && $event->user->previous_last_login){
            $event->user->previous_last_login = $event->user->last_login;
            }
        else{
            $event->user->previous_last_login = now();
            }
        $event->user->last_login = now();
        $event->user->save();   
        }
    }
