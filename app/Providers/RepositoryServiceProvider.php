<?php

namespace Ecommerce\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\Ecommerce\Repositories\CategoryRepository::class, \Ecommerce\Repositories\CategoryRepositoryEloquent::class);
        //:end-bindings:
    }
}
