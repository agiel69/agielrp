<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Telfon;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('front-end/master', function ($view) {
            $telfon = Telfon::where('status_publis', 1)->first();
            $view->with('telfon', $telfon);
        });
    }
}
