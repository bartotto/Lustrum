<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('layouts.sidebar', function ($view) {
            $archives = \App\Post::archives();
            $view->with(compact('archives')); 
            });
            
        \App\Post::creating(function($model){
            $model->title = strtoupper($model->title);
        });
        
        }

    /**
     * Register any application services.
     *
     * @return void
     */
    /**public function register() {
        //
        }
     * 
     */
    }
