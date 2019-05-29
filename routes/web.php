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
Route::get('/profile/{id}', 'UserController@index');
// users by admin 
Route::get('/admin/home' , 'UserController@admin');
Route::get('/user/admin/{id}',[
    'uses' => 'UserController@admin',
    'as' => 'user.admin'
])->middleware('admin');

/*
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/admin/showuser', 'HomeController@dashboard')->name('dashboard');

    Route::get('/users/store', [
        'uses' => 'UserController@store',
        'as' => 'users.store',
    ]);
    Route::delete('/users/{id}', [
        'uses' => 'UserController@removeAdminDelete',
        'as' => 'users.destroy',
    ]);
    Route::delete('/users/force/{id}', [
        'uses' => 'UserController@primanantly',
        'as' => 'users.primanantly',
    ]);

*/

//Route::post('/interest','')
/********************* books route*******/
Route::group(['prefix'=>'/books'],function (){
    Route::get('/create','BookController@create');
    Route::post('/store','BookController@store');



});
/***************user*/





/******************************/
//Route::get('/home','CategoryController@index');
Route::get('/interest','CategoryController@index');
Route::post('/user/interest','CategoryController@store');
Route::get('/show/{id}','CategoryController@show');



