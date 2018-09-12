<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PostModelServiceProvider extends ServiceProvider {
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        \App\Post::observe(\App\Observers\PostObserver::class);
        }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
        }
    }
