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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/articles', 'PagesController@articles');
Route::get('/artists', 'PagesController@artists');
Route::get('/festivals', 'PagesController@festivals');
Route::get('/contact', 'PagesController@contact');

/*
* Pour la création de toutes les routes relatives aux controller PostsController, FestivalsController et ArtistsController
*/
Route::resource('posts', 'PostsController');
Route::resource('festivals', 'FestivalsController');
Route::resource('artists', 'ArtistsController');


