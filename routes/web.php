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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
  Route::get('/terminal/list', function () {
      return view('manager_index');
  });
});

Route::get('/user/new',function(){
  return view('user_new');
});

Route::get('/userlist',function(){
  return view('user_index');
});
