<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Session;

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
        // Redirect user to login page if they are not logged in
        Authenticate::redirectUsing(function ($request) {
            return redirect('user.auth.login');
        });

        // Redirect user to dashboard page if they are already logged in
        RedirectIfAuthenticated::redirectUsing(function ($request) {
            return redirect('user.dashboard');
        });
    }
}
