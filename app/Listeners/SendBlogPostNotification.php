<?php

namespace App\Listeners;

use App\Events\newBlogPost;
use Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBlogPostNotification implements ShouldQueue {
    
    use InteractsWithQueue;
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BlogPost  $event
     * @return void
     */
    public function handle(newBlogPost $event) {
        Log::info('New blog post:');
        $email = $event->user->email;
        $username = $event->user->name;
        }
    
    public function failed(newBlogPost $event, $exception) {
        //
    }
    
}
