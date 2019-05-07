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

//基础路由
/*Route::get('test', function () {
    echo 'test';
});

Route::post('admin/test', function () {
    echo 'post';
});
//多请求路由
Route::match(['get','post'],'admin/login',function(){
	echo 'login';
});

Route::any('admin/register',function(){
	echo 'register';
});*/

//路由传参
Route::get('Home/user/{id}',function($id){
	return 'user'.$id;
});

Route::get('user/{id}/{name}',function($id,$name){
	return 'user'.$id.$name;
})->where(['id'=>'[1-9]*'],['name'=>'[A-Za-z]*']);

//传可选参
Route::get('go/{page?}',function($page=1){
	return 'page'.$page;
});

Route::get('test','TestController@test');


















