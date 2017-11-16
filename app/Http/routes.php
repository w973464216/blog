<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 首页
Route::resource('/home','home\BlogController');

// 文章类别
Route::resource('/type','home\TypeController');

Route::get('/admin/login','admin\LoginController@index');
Route::post('/admin/doMessage','admin\LoginController@doMessage');

Route::get('/admin/code','admin\LoginController@code');

// Route::get('/admin/message','MessageController@index');
// Route::group([''],function(){
// 	
// 	Route::get('/admin/index','UserController');

// 	// Route::get('/wdy/user/index','UserController@index');

// 	// Route::post('/wdy/user','UserController@store');
	
// });
