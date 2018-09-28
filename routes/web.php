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
    return redirect('home');
});

// 利用者
Route::get('/terminal/user_register/{pc_name}/edit', 'UserRegisterController@edit')->name('user_register_edit');
Route::put('/teminal/user_register/{pc_name}','UserRegisterController@update')->name('user_register_update');


// 管理者
Route::prefix('admin')->group(function () {

  // 一覧
  Route::get('/terminal/list','AdminTerminalIndexController@index')->name('terminal_index');
  Route::post('/terminal/list/search','AdminTerminalIndexController@search')->name('terminal_search');

  // 端末新規登録
  Route::get('/terminal/new','AdminTerminalNewController@new')->name('terminal_new');
  Route::post('/terminal/create','AdminTerminalNewController@create')->name('terminal_create');

  // 端末編集
  Route::get('/terminal/{id}/edit','AdminTerminalEditController@Edit')->name('terminal_edit');
  Route::patch('/terminal/{id}','AdminTerminalEditController@update')->name('terminal_update');
  Route::delete('/terminal/{id}','AdminTerminalEditController@destroy')->name('terminal_destroy');


});
