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

Route::get('/', 'SitesController@index');

Route::get('/about', 'SitesController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test/info','TestController@info');
// Route::get('test/info',[
//   'uses' => 'TestController@info',
//   'as' => 'testinfo'
// ]);

// Route::any('test/{id}',[
//   'uses' => 'TestController@info',
//   'as' => 'testinfo'    // 路由器别名
// ])->where(['id'=>'[0-9]+']);

Route::any('test1',['uses' => 'StudentController@test1']);

Route::any('query/insert',['uses' => 'StudentController@queryInsert']);
Route::any('query/update',['uses' => 'StudentController@queryUpdate']);
Route::any('query/delete',['uses' => 'StudentController@queryDelete']);
Route::any('query',['uses' => 'StudentController@query']);

Route::any('student/section1',['uses' => 'StudentController@section1']);
Route::any('student/section2',['as'=>'section','uses' => 'StudentController@section2']);
Route::any('student/request1',['uses' => 'StudentController@request1']);
