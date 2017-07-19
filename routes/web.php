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

//Route::get('/', 'SitesController@index');
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();
Route::match(['get','post'],'admin/login', 'Admin\AuthController@login');

Route::group(['middleware' => ['auth.admin']],function(){
    Route::get('/admin', 'Admin\WelcomeController@index');
});
//Route::match(['get','post'],'admin/login', 'Admin\AuthController@login');
Route::match(['get','post'],'admin/logout','Admin\AuthController@logout');
Route::match(['get','post'],'admin/register', 'Admin\AuthController@register');

//Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
//    Route::get('/', 'HomeController@index');
//    Route::resource('article', 'ArticleController');
//});

//Route::resource('photo', 'PhotoController');
//Route::get('article/{id}', 'ArticleController@show');
//Route::post('comment', 'CommentController@store');
//Route::any('superman','StudentController@superMan');
//Route::get('/about', 'SitesController@about');
//Route::get('test/info','TestController@info');
// Route::get('test/info',[
//   'uses' => 'TestController@info',
//   'as' => 'testinfo'
// ]);

// Route::any('test/{id}',[
//   'uses' => 'TestController@info',
//   'as' => 'testinfo'    // 路由器别名
// ])->where(['id'=>'[0-9]+']);
//
//Route::any('student_test/test1',['uses' => 'StudentTestController@test1']);
//
//Route::any('student_test/query/insert',['uses' => 'StudentTestController@queryInsert']);
//Route::any('student_test/query/update',['uses' => 'StudentTestController@queryUpdate']);
//Route::any('student_test/query/delete',['uses' => 'StudentTestController@queryDelete']);
//Route::any('student_test/query',['uses' => 'StudentTestController@query']);
//
//Route::any('student_test/section1',['uses' => 'StudentTestController@section1']);
//Route::any('student_test/section2',['as'=>'section','uses' => 'StudentTestController@section2']);
//Route::any('student_test/request1',['uses' => 'StudentTestController@request1']);
//
//Route::group(['middleware' => ['web']],function(){
//    Route::any('student_test/session1',['uses' => 'StudentTestController@session1']);
//    Route::any('student_test/session2',['uses' => 'StudentTestController@session2']);
//    Route::any('student_test/session3',['uses' => 'StudentTestController@session3']);
//});
//
//Route::any('student_test/activity1',['uses' => 'StudentTestController@activity1']);
//
//Route::group(['middleware' => ['activity']],function(){
//    Route::any('student_test/activity2',['uses' => 'StudentTestController@activity2']);
//    Route::any('student_test/activity3',['uses' => 'StudentTestController@activity3']);
//});
//
//// student列表页
//Route::get('student/index',['uses' => 'StudentController@index']);
//Route::any('student/create',['uses' => 'StudentController@create']);
//Route::post('student/save',['uses' => 'StudentController@save']);
//Route::any('student/update/{id}',['uses' => 'StudentController@update']);
//Route::any('student/detail/{id}',['uses' => 'StudentController@detail']);
//Route::any('student/delete/{id}',['uses' => 'StudentController@delete']);
//
//
//
//
//
//
//Route::any('upload', 'StudentController@upload');
//Route::any('mail', 'StudentController@mail');
//Route::any('setCache', 'StudentController@setCache');
//Route::any('getCache', 'StudentController@getCache');
//Route::any('log', 'StudentController@log');
//Route::any('queue', 'StudentController@queue');
//Route::get('now',function(){
//    throw new \Exception("我故意的", 1);
//    return date('Y-m-d H:i:s');
//});

$dingo_api = app('Dingo\Api\Routing\Router');
$dingo_api->version('v1',function ($api){
    $api->group([
        'namespace' => 'App\Api\V1\Controllers'
    ],function($api){
        $api->get('test','TestController@index');
        $api->post('/login','AuthController@login');
        $api->post('/register','AuthController@register');
    });

    $api->group([
        'namespace' => 'App\Api\V1\Controllers',
        'middleware' => 'jwt.auth'
    ],function($api){
        $api->get('/me','AuthController@me');
    });


});

$dingo_api->version('v2',function ($api){
    $api->group([
        'namespace' => 'App\Api\V2\Controllers'
    ],function($api){
        $api->get('test','TestController@index');
    });
});
