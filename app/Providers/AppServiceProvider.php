<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;

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
        Paginator::useBootstrap();

        // ✅ GLOBAL CART COUNT FIX
        View::composer('*', function ($view) {

            $count = 0;

            if (Auth::check()) {
                $count = cart::where('phone', Auth::user()->phone)->count();
            }

            $view->with('count', $count);
        });
    }
}