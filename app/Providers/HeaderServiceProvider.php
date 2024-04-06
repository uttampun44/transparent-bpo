<?php

namespace App\Providers;

use App\Models\Users\Users;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $user =  Users::all();

        View::share(
            ['users' => $user]);
    }
}
