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

        Blade::if('admin', function () {
            return auth()->user()->role == Role::Admin;
        });

        Blade::if('editor', function () {
            return auth()->user()->role == Role::Editor;
        });
    }
}
