<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
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
        View::composer('*', function ($view) {
            $user = Session::get('user');

            if ($user) {
                $latestCarts = Cart::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(3)->get();
            } else {
                $latestCarts = collect();
            }

            $view->with('user', $user);
            $view->with('latestCarts', $latestCarts);
        });
    }
}
