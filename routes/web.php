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

// 管理者一覧
Route::prefix('admin')->group(function () {
  Route::get('/terminal/list', function () {
      return view('manager_index');
  });
});

// 管理者 端末新規登録
Route::get('/terminal/new',function(){
  return view('manager_new');
});

// 利用者 
Route::get('/userlist',function(){
  return view('user_index');
});
