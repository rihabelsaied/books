<?php

use App\Notifications\borrow;
use App\User;
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
    //notify
    $user = user::find(1);
    User::find(1)->notify(new borrow);
    return view('welcome');
});



/*admin book route*/
Route::get('/admin/books','AdminBookController@index')->middleware('admin');
Route::delete('admin/books/{book}','AdminBookController@destroy')->middleware('admin');
Route::get('/books/accept/{book}','AdminBookController@accept')->middleware('admin');

Auth::routes();
Route::get('/profile/{id}', 'UserController@userProfile');
Route::get('/home', 'HomeController@index')->name('home');

// routs of admin users
Route::get('/admin/home' , function () {
    return view('/admin/home');
})->middleware('admin');
Route::get('/admin/users' , 'UserController@admin')->middleware('admin');

Route::get('/admin/user/{id}',[
    'uses' => 'UserController@admin',
    'as' => 'user.admin'
])->middleware('admin');
Route::post('admin/users/{user}','UserController@destroy');


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



