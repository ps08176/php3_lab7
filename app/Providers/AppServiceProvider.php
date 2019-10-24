<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('header',function($view){
            $loai_sp= ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });
    }
}
