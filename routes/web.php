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
Route::get('/tema', function () {
    return view('admin/app');
});

Route::resource('grupos-de-oracao','GrupoDeOracaoController');
Route::resource('nucleos','NucleoController');
Route::resource('grupos','GrupoController');
Route::resource('leitores','MembroController');


Route::get('/tema/teste', function () {
    return view('admin/teste');
});
Route::get('/tema/teste', function () {
    return view('admin/teste');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
