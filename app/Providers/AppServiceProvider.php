<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        // $this->registerPolicies()
        // Gate to check if user is logged in
        Gate::define('view-posts', function (User $user) {
            return $user !== null; // Agar user exist karta hai to allow
              });

        Paginator::useBootstrapFive();
    }
}
