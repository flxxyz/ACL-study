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

Route::get('step1', 'RoleController@step1');
Route::get('step2', 'RoleController@step2');
Route::get('step3', 'RoleController@step3');
Route::get('step4', 'RoleController@step4');