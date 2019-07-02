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
    
    return redirect("/login");
});
Auth::routes();

/*admin route*/
Route::group(['middleware'=>'admin','prefix'=>'/admin'],function(){
   
    Route::get('/panal','AdminController@index')->name('user');
    Route::get('/deleteuser/{user}','AdminController@destroy');  
    Route::get('/category/{name}','AdminController@selectBook'); 
    Route::get('/books/accept/{book}','AdminController@accept');    
    Route::get('/books/{book}','AdminController@remove');
    Route::get('/dashbord','AdminController@dashbord');  
    
    
});
/**************route home & intrests */
Route::group(['middleware'=>'auth'],function(){
    Route::get("/home","BookController@show")->name('allbook');
    Route::get('/interest','CategoryController@index');
    Route::post('/user/interest','CategoryController@store');


});



Route::post('/comment',"CommentController@commentStore");


//Route::post('/interest','')
/********************* books route*******/
Route::group(['prefix'=>'/books','middleware'=>'auth'],function (){
    Route::get('/create','BookController@create');
    Route::post('/store','BookController@store');
    Route::get("/showbook/{id}","BookController@showbook");
    Route::post("/editbook/{id}","BookController@edit");
    Route::put("/profile/update/{id}","BookController@update");
    Route::put("/accept/{id}","BookController@changeStatus");


    Route::get("/authorbook/{id}","BookController@authorbook");




});
/***************user*/


/******************************profile*********************************/
Route::group(['prefix'=>'/user','middleware'=>'CheckAuth'],function(){
Route::get("/profile/{id}","UserController@showprofile");
Route::post("/deleteaccount/{id}","UserController@delete"); //delete accont
Route::get('/favour/{id}','CategoryController@show');
Route::put("/profile/update/{id}","UserController@update");


});
Route::post("/deletebook/{id}","UserController@deletebook"); //delete accont





Route::post('/autocomplete/fetch', 'AuthorController@fetch')->name('autocomplete.fetch');
//Route::get('/borrow/{id}', 'BookController@borrow');
Route::post("/borrow/{id}", 'BookController@borrow')->name('borrow');
Route::post('/changeStatus/{id}','BookController@changeStatus');

/***************************** rating */
Route::get('/rateStars/{rate}','BookController@rating');
/***************************** search */
Route::post('/searchautocomplete/searchfetch', 'BookController@fetch')->name('autocompletesearch.fetchsearch');









