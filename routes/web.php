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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//管理者投稿用
Route::group(['prefix'=>'clicker','middleware'=>'auth'],function(){
  Route::get('/index','clickerController@index')->name('clicker.index');
  Route::get('/create','clickerController@create')->name('clicker.create');
  Route::post('/store','clickerController@store')->name('clicker.store');

});
//一般ユーザー用
Route::group(['prefix'=>'answer','middleware'=>'auth'],function(){
  Route::get('/index','AnswerController@index')->name('answer.index');
  //TODO:コメントの投稿機能の作成
  Route::get('/create/{question_id}','AnswerController@create')->name('answer.create');
  Route::post('/store','AnswerController@store')->name('answer.store');
});

Route::get('/liked/{question_id}','PostController@liked')->name('liked');
Route::get('/disliked/{question_id}','PostController@disliked')->name('disliked');

//全員見れる
Route::get('/post','PostController@index')->name('post');
Route::get('/detail/{question_id}','PostController@detail')->name('detail');

Route::get('/home', 'HomeController@index')->name('home');

//テスト用ルート　
Route::get('/test','BrainWavesController@index')->name('test');
Route::get('/testa/{data}/{poorSignal}/{attention}/{meditation}/{delta}/{theta}/{lowAplpha}/{highAplpha}/{lowBeta}/{highBeta}/{lowGamma}/{midGamma}','BrainWavesController@testa');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
