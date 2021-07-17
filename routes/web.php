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
Route::group(['namespace' => 'Front'], function(){
    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/contact-us', 'FrontController@contact')->name('front.contact');
    Route::post('/contact-us', 'FrontController@contact')->name('front.contact.post');
    Route::get('/brand/{brand}', 'FrontController@brand')->name('front.brand');
    Route::get('/pages/{page}', 'FrontController@pages')->name('front.pages');
    Route::get('/collections/{category}', 'FrontController@categories')->name('front.categories');
    Route::get('/search', 'FrontController@search')->name('front.search');
});
Route::group(['namespace' => 'User'], function(){
    Route::post('/order/{id}', 'OrdersController@store')->name('customer.order');
});


Route::group(['namespace' => 'User','middleware' => 'auth:web'], function(){

        // Dashboard route
            Route::get('/admin', 'DashboardController@index')->name('user.dashboard');
        
        // Orders routes
        
            Route::get('/admin/orders', 'OrdersController@index')->name('user.orders');
            Route::post('/admin/orders/update/{id}', 'OrdersController@update')->name('user.orders.update');
         
        // items routes
        
            Route::get('/admin/items', 'ItemsController@index')->name('user.items');
            Route::get('/admin/items/create', 'ItemsController@create')->name('user.items.create');
            Route::post('/admin/items/store', 'ItemsController@store')->name('user.items.store');
            Route::get('/admin/items/edit/{id}', 'ItemsController@edit')->name('user.items.edit');
            Route::post('/admin/items/update/{id}', 'ItemsController@update')->name('user.items.update');
            Route::get('/admin/items/delete/{id}', 'ItemsController@delete')->name('user.items.delete');

        // items routes
        
            Route::get('/admin/brand/setup', 'BrandsController@create')->middleware('CreateOneBrand')->name('user.brand.setup');
            Route::post('/admin/brand/store', 'BrandsController@store')->name('user.brands.store');
            Route::get('/admin/brand/edit/{id}', 'BrandsController@edit')->name('user.brands.edit');
            Route::post('/admin/brand/update/{id}', 'BrandsController@update')->name('user.brands.update'); 
        
        // information routes

        Route::get('/admin/information/{id}', 'InformationsController@edit')->name('user.information.edit');
        Route::post('/admin/information/update/{id}', 'InformationsController@update')->name('user.information.update');
        Route::get('/admin/password/edit/{id}', 'InformationsController@password')->name('user.password.edit');
        Route::post('/admin/password/update/{id}', 'InformationsController@updatePassword')->name('user.password.update');

    
        // activate account routes
            Route::get('admin/activate/{code}', 'ActivationController@activateUserAccount')->name('user.activate');
            Route::get('admin/resend/{email}', 'ActivationController@resendActivationCode')->name('user.resend');
    
        // logout route
            Route::get('admin/logout', 'UserController@userLogout')->name('user.logout');
});


    Route::group(['namespace' => 'User' ,'middleware' => 'guest:web'], function(){
        Route::get('admin/login', 'UserController@showLogin')->name('show.user.login');
        Route::post('admin/login', 'UserController@login')->name('user.login');
        Route::get('admin/register', 'UserController@showRegister')->name('show.user.register');
        Route::post('admin/register', 'UserController@register')->name('user.register');
    
    });

    Route::fallback(function () {
        abort(404);
    }); 
    Route::fallback(function () {
        return view('layouts.404');
    });