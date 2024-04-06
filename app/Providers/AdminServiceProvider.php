<?php

namespace App\Providers;

use App\Models\Users\Users;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
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
        $admin = Users::whereNotIn('role', [2])->get();

            View::share(
                [
                    'admins' => $admin,
                ]
                );

    }
}
