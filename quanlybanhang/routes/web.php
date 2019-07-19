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
// route Hiển thị màn hình hello ExampleController@action
Route::get('/hello', 'ExampleController@hello')->name('example.hello');
Route::get('/gioithieubanthan', 'AboutmeController@gioithieu')->name('example.aboutme');
Route::get('/hoctap/php', 'StudyController@php')->name('example.php');
Route::get('/hoctap/laravel', 'StudyController@laravel')->name('example.laravel');
Route::get('/ngayhomnay', 'TimeController@ngaygio')->name('example.ngaygio');