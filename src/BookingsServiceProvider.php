<?php

namespace TransitLounge\Bookings;


use Illuminate\Support\ServiceProvider;

class BookingsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'transitlounge');
    }

    public function register()
    {
        //
    }
}
