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

// 利用者
Route::get('/terminal/user_register/{id}/edit', 'UserRegisterController@edit')->name('user_register_edit');



// 管理者
Route::prefix('admin')->group(function () {

  // 一覧
  Route::get('/terminal/list','AdminTerminalIndexController@index')->name('terminal_index');
  Route::post('/terminal/list/search','AdminTerminalIndexController@search')->name('terminal_search');

  // 端末新規登録
  Route::get('/terminal/new','AdminTerminalNewController@new')->name('terminal_new');
  Route::post('/terminal/create','AdminTerminalNewController@create')->name('terminal_create');

  // 端末新規登録確認
  Route::get('/terminal/check','AdminTerminalNewContoroller@check')->name('terminal_check');


  // 端末新規登録完了
  Route::get('/terminal/complete',function(){
    return view('terminal_complete');
  });

  // 端末編集
  Route::get('/terminal/edit','AdminTerminalEditController@Edit')->name('terminal_edit');

  // 端末編集
  Route::get('/terminal/edit/check',function(){
    return view('terminal_edit_check');
  });


});
