<?php

namespace App\Providers;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Model::shouldBeStrict(env('APP_ENV', "local") == "local");

        App::setLocale('id');

        // More generic @role
        Blade::if('role', function (array $roles) {
            foreach ($roles as $role) {
                if (auth()->user()->role->value == $role) {
                    return true;
                }
            }

            return false;
        });

        // Specified only for admin
        Blade::if('admin', function () {
            return auth()->user()->role == Role::Admin;
        });
    }
}
