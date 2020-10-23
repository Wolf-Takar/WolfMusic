<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
<<<<<<< HEAD
=======
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
>>>>>>> de3204931ee641f075c073efa746b59452c65031
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        'App\Events\Event' => [
            'App\Listeners\EventListener',
=======
        Registered::class => [
            SendEmailVerificationNotification::class,
>>>>>>> de3204931ee641f075c073efa746b59452c65031
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
