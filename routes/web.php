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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/','HomeController@index')->name('home');
// Route::get('/userdetails', 'UserDetailsController@index');

Route::get('/uploadfile', 'UploadController@getView');
Route::post('/insertfile',array('as'=>'insertfile','uses'=>'UploadController@insertFile'));



Route::resource('userdetails','UserDetailsController');


// Route::get('delete/{id}', 'UserDetailsController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/user', 'UserController@index');
Route::get('/admin', 'AdminController@index');
