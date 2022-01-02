<?php

namespace Customers\Providers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
        View::addNamespace('customers', base_path('app/modules/customers/resources/views')); // view('customers::backend.index')

        $this->loadMigrationsFrom(base_path('app/modules/customers/database/migrations'));

        Artisan::call('db:seed', [
            '--class' => 'Customers\database\seeders\DatabaseSeeder'
        ]);


        //View::addLocation(base_path('app/modules/customers/resources/views')); // view('backend.index')
        //$ds = DIRECTORY_SEPARATOR;
        //$this->loadRoutesFrom(__DIR__ . $ds . '..' . $ds . 'routes' . $ds . 'web.php');
        //$this->loadViewsFrom(__DIR__ . $ds . '..' . $ds . 'resources' . $ds . 'views' , 'customers');
        //$this->loadMigrationsFrom(__DIR__ . $ds . '..' . $ds . 'database'.$ds.'migrations');

    }
}
