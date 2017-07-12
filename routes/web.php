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

Route::any('student_test/test1',['uses' => 'StudentTestController@test1']);

Route::any('student_test/query/insert',['uses' => 'StudentTestController@queryInsert']);
Route::any('student_test/query/update',['uses' => 'StudentTestController@queryUpdate']);
Route::any('student_test/query/delete',['uses' => 'StudentTestController@queryDelete']);
Route::any('student_test/query',['uses' => 'StudentTestController@query']);

Route::any('student_test/section1',['uses' => 'StudentTestController@section1']);
Route::any('student_test/section2',['as'=>'section','uses' => 'StudentTestController@section2']);
Route::any('student_test/request1',['uses' => 'StudentTestController@request1']);

Route::group(['middleware' => ['web']],function(){
    Route::any('student_test/session1',['uses' => 'StudentTestController@session1']);
    Route::any('student_test/session2',['uses' => 'StudentTestController@session2']);
    Route::any('student_test/session3',['uses' => 'StudentTestController@session3']);
});

Route::any('student_test/activity1',['uses' => 'StudentTestController@activity1']);

Route::group(['middleware' => ['activity']],function(){
    Route::any('student_test/activity2',['uses' => 'StudentTestController@activity2']);
    Route::any('student_test/activity3',['uses' => 'StudentTestController@activity3']);
});

// student列表页
Route::get('student/index',['uses' => 'StudentController@index']);
Route::any('student/create',['uses' => 'StudentController@create']);
Route::post('student/save',['uses' => 'StudentController@save']);
Route::any('student/update/{id}',['uses' => 'StudentController@update']);
Route::any('student/detail/{id}',['uses' => 'StudentController@detail']);
Route::any('student/delete/{id}',['uses' => 'StudentController@delete']);



