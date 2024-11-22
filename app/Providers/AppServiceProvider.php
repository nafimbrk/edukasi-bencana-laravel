<?php

namespace App\Providers;

use App\Models\Absen;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\View;
use App\Models\Pretest;
use App\Models\Posttest;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paginator::useBootstrap();

        // Gate::define('admin', function(User $user) {
        //    return $user->is_admin;
        // });






        View::composer('*', function ($view) {
        if (Auth::check()) {
            $user = Auth::user();
            $hasAbsen = Absen::where('user_id', $user->id)
                             ->whereDate('tanggal', now()->toDateString())
                             ->exists();
            $view->with('hasAbsen', $hasAbsen);
        }
        
        View::composer('*', function ($view) {
            $user = Auth::user();
            $hasPretest = $user ? Pretest::where('user_id', $user->id)->exists() : false;
            $view->with('hasPretest', $hasPretest);
        });
        
        View::composer('*', function ($view) {
            $user = Auth::user();
            $hasPosttest = $user ? Posttest::where('user_id', $user->id)->exists() : false;
            $view->with('hasPosttest', $hasPosttest);
        });
    });
    }
}
