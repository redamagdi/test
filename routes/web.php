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
Route::group(['middleware' => 'auth'],function (){

Route::get('/home','PostController@index');
Route::get('/','PostController@index');

});

// Route::get('/menue/{id}/update', 'menuesController@update');
//factory(App\orderUser::class, 10)->create();
//factory(App\menue::class, 100)->create();
// factory(App\orderUser::class, 25)->create();