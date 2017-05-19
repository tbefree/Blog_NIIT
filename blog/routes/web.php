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



Route::group(['middleware' => ['web']],function(){
  //Authentication routes
  // Route::get('auth/login','Auth\AuthController@getLogin');
  // Route::post('auth/login','Auth\AuthController@postLogin');
  // Route::get('auth/logout','Auth\AuthController@getLogout');
  // 
  // //Registration routes
  // Route::get('auth/register','Auth\AuthController@getRegister');
  // Route::post('auth/register','Auth\AuthController@postRegister')

  Route::get('blog/{slug}' , ['as' => 'blog.single' , 'uses' =>'BlogController@getSingle' ]);

  Route::get('blog' , ['uses' => 'BlogController@getIndex' , 'as' => 'blog.index']);

  Route::get('contact','PagesController@getContact');

  Route::get('about','PagesController@getAbout');

  Route::get('/', 'PagesController@getIndex');

  Route::resource('posts','PostController');


});

Auth::routes();

Route::get('/home', 'HomeController@index');
