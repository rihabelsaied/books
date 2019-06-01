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

/*admin book route*/
Route::get('/admin/books','AdminBookController@index');
Route::delete('admin/books/{book}','AdminBookController@destroy');
Route::get('/books/accept/{book}','AdminBookController@accept');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'UserController@userProfile');



// users by admin
Route::get('/admin/home' , 'UserController@admin');
Route::get('/user/admin/{id}',[
    'uses' => 'UserController@admin',
    'as' => 'user.admin'
])->middleware('admin');



//Route::post('/interest','')
/********************* books route*******/
Route::group(['prefix'=>'/books'],function (){
    Route::get('/create','BookController@create');
    Route::post('/store','BookController@store');
    Route::get("/show","BookController@show")->name('allbook');
    Route::get("/showbook/{id}","BookController@showbook");



});
/***************user*/


/******************************/
//Route::get('/home','CategoryController@index');
Route::get('/interest','CategoryController@index');
Route::post('/user/interest','CategoryController@store');
Route::get("/user/profile/{id}","UserController@showprofile");
// Route::get("/user/profile/editimg/{id}","UserController@editimg");
Route::get("/user/profile/edit/{id}","UserController@edit");
Route::put("/user/profile/update/{id}","UserController@update");
Route::get('/show/{id}','CategoryController@show');
/************************ ajax*/

Route::post('/autocomplete/fetch', 'AuthorController@fetch')->name('autocomplete.fetch');
//Route::get('/borrow/{id}', 'BookController@borrow');
Route::get("/borrow/{id}", 'BookController@borrow')->name('borrow');



Route::post('/autocomplete/fetch', 'AuthorController@fetch')->name('autocomplete.fetch');



