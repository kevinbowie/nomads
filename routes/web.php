<?php

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

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('travel-package', 'TravelPackageController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');

Route::get('/detail/{slug}', 'DetailController@index')->name('detail');

// Route::prefix('checkout')
//     ->namespace('Checkout')
//     ->middleware(['auth', 'verified'])
//     ->group(function() {
//         Route::post('/{id}', 'CheckoutController@proccess')->name('checkout-process');
//         Route::get('/{id}', 'CheckoutController@index')->name('checkout');
//         Route::post('/create/{detail_id}', 'CheckoutController@create')->name('checkout-create');
//         Route::get('/remove/{detail_id}', 'CheckoutController@remove')->name('checkout-remove');
//         Route::get('/confirm/{id}', 'CheckoutController@success')->name('checkout-success');
//     });

Route::post('/checkout/{id}', 'CheckoutController@process')
    ->middleware(['auth', 'verified'])
    ->name('checkout-process');

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->middleware(['auth', 'verified'])
    ->name('checkout');

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->middleware(['auth', 'verified'])
    ->name('checkout-create');

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->middleware(['auth', 'verified'])
    ->name('checkout-remove');

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->middleware(['auth', 'verified'])
    ->name('checkout-success');

// Route::get('/checkout', 'CheckoutController@index')->name('checkout');
// Route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');

Auth::routes(['verify' => true]);
