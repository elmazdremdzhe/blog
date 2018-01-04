<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('layouts.sidebar',  function($view){
            $view->with('archives', \App\Post::archives());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        //@todo  Ep25 02::00


//Here is an example of registering model with service container and
//passing config to it
//so that every time when we call it (not directly but from service container
// through App::make()
// the Class instance called with passed argument already
//


        \App::bind('App\Redis', function(){

            return new \App\Redis(config('services.stripe.secret'));
        });


        $stripe = \App::make('App\Redis');
    }
}
