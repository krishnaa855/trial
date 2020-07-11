<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Http;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Profile@index');
Route::post('savedata','Profile@savedata');
Route::get('trial',"Profile@trial");
Route::post('user','Profile@user');


Route::view('model','model');
Route::post('submit','Profile@submit');
Route::get('show','Profile@show');
Route::get('edit/{id}','Profile@Edit');
Route::post('update/{id}','Profile@update');
Route::get('delete/{id}','Profile@delete');