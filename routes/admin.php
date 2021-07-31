<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'Admin','middleware' => 'auth:admin'], function(){

     // dashboard route
     Route::get('/administration', 'AdminController@index')->name('admin.dashboard');

     // Categories routes
     Route::get('administration/categories', 'CategoryController@index')->name('admin.categories');
     Route::get('/administration/categories/create', 'CategoryController@create')->name('admin.categories.create');
     Route::post('/administration/categories/store', 'CategoryController@store')->name('admin.categories.store');
     Route::get('/administration/categories/edit/{id}', 'CategoryController@edit')->name('admin.categories.edit');
     Route::post('/administration/categories/update/{id}', 'CategoryController@update')->name('admin.categories.update');
     Route::get('/administration/categories/delete/{id}', 'CategoryController@delete')->name('admin.categories.delete');

     // cities routes
       Route::get('administration/cities', 'CitiesController@index')->name('admin.cities');
       Route::get('/administration/cities/create', 'CitiesController@create')->name('admin.cities.create');
       Route::post('/administration/cities/store', 'CitiesController@store')->name('admin.cities.store');
       Route::get('/administration/cities/edit/{id}', 'CitiesController@edit')->name('admin.cities.edit');
       Route::post('/administration/cities/update/{id}', 'CitiesController@update')->name('admin.cities.update');
       Route::get('/administration/cities/delete/{id}', 'CitiesController@delete')->name('admin.cities.delete');

    // cities routes
    Route::get('administration/pages', 'PagesController@index')->name('admin.pages');
    Route::get('/administration/pages/create', 'PagesController@create')->name('admin.pages.create');
    Route::post('/administration/pages/store', 'PagesController@store')->name('admin.pages.store');
    Route::get('/administration/pages/edit/{id}', 'PagesController@edit')->name('admin.pages.edit');
    Route::post('/administration/pages/update/{id}', 'PagesController@update')->name('admin.pages.update');
    Route::get('/administration/pages/delete/{id}', 'PagesController@delete')->name('admin.pages.delete');

     // cities routes
     Route::get('administration/users', 'UsersController@index')->name('admin.users');
     Route::get('/administration/users/create', 'UsersController@create')->name('admin.users.create');
     Route::post('/administration/users/store', 'UsersController@store')->name('admin.users.store');
     Route::get('/administration/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
     Route::post('/administration/users/update/{id}', 'UsersController@update')->name('admin.users.update');
     Route::get('/administration/users/delete/{id}', 'UsersController@delete')->name('admin.users.delete');

     // logout route
     Route::get('administration/logout', 'AdminController@adminLogout')->name('admin.logout');
});

Route::group(['namespace' => 'Admin' ,'middleware' => 'guest:admin'], function(){
    Route::get('/administration/login', 'AdminController@showLogin')->name('show.admin.login');
    Route::post('/administration/login', 'AdminController@login')->name('admin.login');

});