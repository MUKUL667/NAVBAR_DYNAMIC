<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\MENU;


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
        $menus = MENU::where('status','ENABLED')->get();
        view()->share('menus',$menus);
    }
}
