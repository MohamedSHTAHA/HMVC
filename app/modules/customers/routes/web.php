<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->group(function () {
    Route::namespace('BackEnd')->prefix(config('customers.prefix.backend', config('module.prefix.backend')))->group(function () {
        Route::prefix(config('customers.prefix.module-name'))->group(function () {
            Route::get('home', 'CustomerController@index')->middleware('customer_middleware');
        });
    });
    Route::namespace('FrontEnd')->prefix(config('customers.prefix.frontend', config('module.prefix.frontend')))->group(function () {
        Route::prefix(config('customers.prefix.module-name'))->group(function () {
            Route::get('home', 'CustomerController@index');
        });
    });
});


// Route::get('customers', [Customers\Http\Controllers\BackEnd\CustomerController::class, 'index']);
