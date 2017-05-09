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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index');
    Route::post('/home', 'HomeController@updateProfileInfo');
    Route::get('/chat', 'ChatController@index');
    Route::get('/chat/messages', 'ChatController@messages');
    Route::post('/chat/messages', 'ChatController@postMessages');

    Route::group(['prefix' => 'admin'], function() {
        Route::get('/', 'AdminController@index');
        Route::post('/news', 'AdminController@news');
    });
});

Route::get('/contact_us', 'HomeController@getContact_us');
Route::post('/contact_us', 'HomeController@postContact_us');
