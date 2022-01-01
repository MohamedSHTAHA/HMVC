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
    Route::namespace('BackEnd')->prefix('backend')->group(function () {
        Route::get('home', 'CustomerController@index');
    });
    Route::namespace('FrontEnd')->prefix('frontend')->group(function () {
        Route::get('home', 'CustomerController@index');
    });
});


// Route::get('customers', [Customers\Http\Controllers\BackEnd\CustomerController::class, 'index']);
