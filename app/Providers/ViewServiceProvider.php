<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
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
        // Use a view composer to share the $categories variable with the client_navigation view
        View::composer('layouts.client_navigation', function ($view) {
            $categories = Category::all();
            $view->with('categories', $categories);
        });
    }
}
