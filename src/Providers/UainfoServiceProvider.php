<?php

namespace Ufucms\LaravelUainfo\Providers;

use Illuminate\Support\ServiceProvider;

class UainfoServiceProvider extends ServiceProvider
{
    protected $defer = true; // 延迟加载服务
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uainfo', function () {
            return new Uainfo();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }


    public function provides()
    {
        return ['uainfo'];
    }
}
