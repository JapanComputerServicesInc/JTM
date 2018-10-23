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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Route::get('/home', function () {
    //     return redirect('/terminal/list');
    // });

    Route::get('/', function () {
        return redirect('/terminal');
    });

    // 管理者
    Route::prefix('admin')->group(function () {


      // 端末新規登録
      Route::get('/terminal/new','AdminTerminalNewController@new')->name('terminal_new');
      Route::post('/terminal/create','AdminTerminalNewController@create')->name('terminal_create');

      // 端末編集
      Route::patch('/terminal/{id}','AdminTerminalEditController@update')->name('terminal_update');
      Route::delete('/terminal/{id}','AdminTerminalEditController@destroy')->name('terminal_destroy');

      Route::prefix('management')->group(function () {
          //cpu管理
          Route::get('/cpu','CpuManagementController@index')->name('cpu_index');
          Route::get('/cpu/new','CpuManagementController@new')->name('cpu_new');
          Route::post('/cpu/create','CpuManagementController@create')->name('cpu_create');
          Route::get('/cpu/{id}/edit','CpuManagementController@edit')->name('cpu_edit');
          Route::patch('/cpu/{id}','CpuManagementController@update')->name('cpu_update');
          Route::delete('/cpu/{id}','CpuManagementController@destroy')->name('cpu_destroy');
          //部署管理
          Route::get('/department','DepartmentManagementController@index')->name('department_index');
          Route::get('/department/new','DepartmentManagementController@new')->name('department_new');
          Route::post('/department/create','DepartmentManagementController@create')->name('department_create');
          Route::get('/department/{id}/edit','DepartmentManagementController@edit')->name('department_edit');
          Route::patch('/department/{id}','DepartmentManagementController@update')->name('department_update');
          Route::delete('/department/{id}','DepartmentManagementController@destroy')->name('department_destroy');
          //保管場所管理
          Route::get('/depository','DepositoryManagementController@index')->name('depository_index');
          Route::get('/depository/new','DepositoryManagementController@new')->name('depository_new');
          Route::post('/depository/create','DepositoryManagementController@create')->name('depository_create');
          Route::get('/depository/{id}/edit','DepositoryManagementController@edit')->name('depository_edit');
          Route::patch('/depository/{id}','DepositoryManagementController@update')->name('depository_update');
          Route::delete('/depository/{id}','DepositoryManagementController@destroy')->name('depository_destroy');
          //社員管理
          Route::get('/employee','EmployeeManagementController@index')->name('employee_index');
          Route::get('/employee/new','EmployeeManagementController@new')->name('employee_new');
          Route::post('/employee/create','EmployeeManagementController@create')->name('employee_create');
          Route::get('/employee/{id}/edit','EmployeeManagementController@edit')->name('employee_edit');
          Route::patch('/employee/{id}','EmployeeManagementController@update')->name('employee_update');
          Route::delete('/employee/{id}','EmployeeManagementController@destroy')->name('employee_destroy');
          //端末情報管理
          Route::get('/terminal','TerminalManagementController@index')->name('terminal_info_index');
          Route::get('/terminal/new','TerminalManagementController@new')->name('terminal_info_new');
          Route::post('/terminal/create','TerminalManagementController@create')->name('terminal_info_create');
          Route::get('/terminal/{id}/edit','TerminalManagementController@edit')->name('terminal_info_edit');
          Route::patch('/terminal/{id}','TerminalManagementController@update')->name('terminal_info_update');
          Route::delete('/terminal/{id}','TerminalManagementController@destroy')->name('terminal_info_destroy');
          //office情報管理
          Route::get('/office','OfficeManagementController@index')->name('office_index');
          Route::get('/office/new','OfficeManagementController@new')->name('office_new');
          Route::post('/office/create','OfficeManagementController@create')->name('office_create');
          Route::get('/office/{id}/edit','OfficeManagementController@edit')->name('office_edit');
          Route::patch('/office/{id}','OfficeManagementController@update')->name('office_update');
          Route::delete('/office/{id}','OfficeManagementController@destroy')->name('office_destroy');
      });
    });
});
// 利用者
Route::get('/user_register/{pc_name}/edit', 'UserRegisterController@edit')->name('user_register_edit');
Route::put('/user_register/{pc_name}','UserRegisterController@update')->name('user_register_update');

// 一覧
Route::get('/terminal','AdminTerminalIndexController@index')->name('terminal_index');
Route::post('/terminal/list/search','AdminTerminalIndexController@search')->name('terminal_search');

//端末詳細
Route::get('/terminal/{id}/edit','AdminTerminalEditController@edit')->name('terminal_edit');
