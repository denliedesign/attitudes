<?php

namespace App\Providers;

use App\Models\Content;
use App\Models\Photo;
use App\Models\Teacher;
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
    public function boot()
    {
//        View::share('contents', Content::all());
//        View::share('photos', Photo::all());
//        View::share('teachers', Teacher::all());
    }
}
