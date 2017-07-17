<?php

namespace App\Providers;

use App\Core\Superman;
use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
//        $this->app->singleton('App\Core\Superman', function ($app) {
//            return new Superman('nihao');
//        });
        $this->app->bind('App\Core\SuperModuleInterface', 'App\Core\Superman');
    }
}
