<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Components\Navbar;
use App\View\Components\App;
use App\View\Components\Home;
use App\View\Components\FormGroup;
use App\View\Components\Errors;
use App\View\Components\EspacePublic;
use App\View\Components\Admin;
use App\View\Components\FlashBag;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;

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
        Blade::component(FormGroup::class, 'form-group');
        Blade::component(Errors::class, 'errors');
        Blade::component(EspacePublic::class, 'espace-public');
        Blade::component(Admin::class, 'admin');
        Blade::component(FlashBag::class, 'flash-bag');

        Schema::defaultStringLength(191);
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
