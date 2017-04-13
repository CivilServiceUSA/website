<?php

namespace App\Providers;

use CivilServices\Data\House;
use CivilServices\Data\Senate;
use CivilServices\Data\State;
use Illuminate\Support\Facades\View;
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
        View::composer('partials.footer', function ($view) {
            return $view->with(
                'searchAutocomplete',
                (new State)->autocomplete()->merge((new Senate)->autocomplete())->merge((new House)->autocomplete())
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('bugsnag.multi', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.multi', \Psr\Log\LoggerInterface::class);
    }
}
