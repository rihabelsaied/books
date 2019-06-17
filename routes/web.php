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
    // return view ('auth.login');
    return redirect("/login");
});

/*admin book route*/
Route::group(['middleware'=>'admin'],function(){
   
    
    // Route::get('/admin/user/{id}',[
    //     'uses' => 'UserController@admin',
    //     'as' => 'user.admin'
    // ]);
    Route::get('/admin/home','AdminController@index');
    Route::post('admin/users/{user}','AdminController@destroy');    
    Route::get('admin/books/{book}','AdminController@remove');
    Route::get('/books/accept/{book}','AdminController@accept');    

});


Auth::routes();
Route::get("/home","BookController@show")->name('allbook')->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'UserController@userProfile');

Route::get("/user/profile/{id}","UserController@showprofile");
Route::post('/comment',"CommentController@commentStore");

// users by admin




//Route::post('/interest','')
/********************* books route*******/
Route::group(['prefix'=>'/books'],function (){
    Route::get('/create','BookController@create');
    Route::post('/store','BookController@store');
    Route::get("/showbook/{id}","BookController@showbook");
    Route::post("/editbook/{id}","BookController@edit");
    Route::put("/profile/update/{id}","BookController@update");

    Route::get("/authorbook/{id}","BookController@authorbook");




});
/***************user*/


/******************************/
//Route::get('/home','CategoryController@index');
Route::get('/interest','CategoryController@index');
Route::post('/user/interest','CategoryController@store');
Route::get("/user/profile/{id}","UserController@showprofile")->middleware('CheckAuth');
Route::post("/user/profile/{id}","UserController@edit"); //ajax stile not
Route::post("/user/deleteaccount/{id}","UserController@delete"); //delete accont
Route::post("/user/deletebook/{id}","UserController@deletebook"); //delete accont


// Route::post("/user/profile/edit/{id}","UserController@edit");
Route::put("/user/profile/update/{id}","UserController@update");
Route::get('/favour/{id}','CategoryController@show');
/************************ ajax*/

Route::post('/autocomplete/fetch', 'AuthorController@fetch')->name('autocomplete.fetch');
//Route::get('/borrow/{id}', 'BookController@borrow');
Route::get("/borrow/{id}", 'BookController@borrow')->name('borrow');

/***************************** rating */
Route::get('/rateStars/{rate}','BookController@rating');
/***************************** search */
Route::post('/searchautocomplete/searchfetch', 'BookController@fetch')->name('autocompletesearch.fetchsearch');





