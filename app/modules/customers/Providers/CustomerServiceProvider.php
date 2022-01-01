<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    protected $namespace = 'Customers\\Http\\Controllers';

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
        config(['customers' => File::getRequire(base_path('app/modules/customers/config/route.php'))]);

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/modules/customers/routes/web.php'));
        //$ds = DIRECTORY_SEPARATOR;
        //$this->loadRoutesFrom(__DIR__ . $ds . '..' . $ds . 'routes' . $ds . 'web.php');

    }
}
