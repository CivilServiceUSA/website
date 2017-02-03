<?php

namespace App\Providers;

use CivilServices\Data\Senator;
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
        View::composer('partials.header', function ($view) {
            return $view->with(
                'searchAutocomplete',
                (new State)->autocomplete()->merge((new Senator)->autocomplete())
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
        //
    }
}
