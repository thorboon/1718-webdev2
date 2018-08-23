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

// Root Route
Route::get('/', 'HomeController@index')->name('home');

// Auth Routes
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

// CRUD Auction Routes
Route::resource('auctions', 'AuctionController');

// CRUD Categories Routes
Route::resource('categories', 'CategoryController');

// CRUD SubCategories Routes
Route::resource('subcategories', 'SubCategoryController');

// CRUD Users Routes
Route::resource('users', 'UserController');