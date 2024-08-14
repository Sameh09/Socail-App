<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $top_users = Cache::remember('top_users', now()->addMinutes(1), function () {
            return User::withCount('ideas')->orderBy('ideas_count', 'DESC')->limit(5)->get();
        });
        View::share('top_users',$top_users);
        Paginator::useBootstrapFive();
    }
}
