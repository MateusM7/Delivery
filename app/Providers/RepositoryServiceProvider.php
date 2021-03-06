<?php

namespace Delivery\Providers;

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
       $this->app->bind(
           'Delivery\Repositories\CategoryRepository',
           'Delivery\Repositories\CategoryRepositoryEloquent'
           


        );
        $this->app->bind(
           'Delivery\Repositories\ProductRepository',
           'Delivery\Repositories\ProductRepositoryEloquent'


        );
    }
}
