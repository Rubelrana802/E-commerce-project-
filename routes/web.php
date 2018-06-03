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

Route::get('/', 'WelcomeController@index');
Route::get('/category', 'WelcomeController@category');
Route::get('/electronic', 'WelcomeController@electronic');
Route::get('/womenwear', 'WelcomeController@womenwear');
Route::get('/shortcode', 'WelcomeController@shortcode');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/product-details', 'WelcomeController@productDetails');


Auth::routes();
Route::get('/dashboard', 'HomeController@index');


/*category info*/
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');

/*category info*/

