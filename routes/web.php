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
Route::pattern('id','[0-9]+');
Route::group(['prefix'=>'post'],function(){//網址群組化 prefix 關鍵字 
Route::get('/', 'HomeController@index');//home
Route::get('create', 'HomeController@create');//new
Route::post('/', 'HomeController@store');//存儲
Route::delete('{id}','HomeController@delete');
Route::get('{id}', 'HomeController@show');
Route::get('{id}/edit', 'HomeController@edit');
Route::put('{id}', 'HomeController@update');

});
Route::model('pp', 'Post');
Route::get('p/{pp}', function(Post $post)
{
    return $post->title;
});