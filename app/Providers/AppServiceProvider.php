<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Components\Navbar;
use App\View\Components\App;
use App\View\Components\Home;

use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Blade::component(Navbar::class, 'navbar');
        Blade::component(App::class, 'app');
        Blade::component(Home::class, 'Home');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
