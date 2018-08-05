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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'admin'],function (){
    Route::get('/','Admin\HomeController@index')->name('homeAdmin');
    Route::get('/change-password','Admin\HomeController@changePassword')->name('changePassword');
    Route::post('/change-password','Admin\HomeController@doChangePassword')->name('doChangePassword');

    Route::resources([
        'categories' => 'Admin\CategoryController',
        'names' => 'Admin\NameController',
        'settings' => 'Admin\SettingController',
        'comments' => 'Admin\CommentController'
    ]);
});
