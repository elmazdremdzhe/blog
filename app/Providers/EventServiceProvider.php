<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

    // To create all needed classes for these events:
    // php artisan event:generate

    protected $listen = [
        /*'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],*/
        'App\Events\ThreadCreated' => [
            'App\Listeners\NotifySubscribers',
            'App\Listeners\CheckForSpam',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
