<?php

namespace App\Providers;

use Dusterio\LumenPassport\LumenPassport;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        Passport::ignoreMigrations();
        LumenPassport::allowMultipleTokens();
    }
}
