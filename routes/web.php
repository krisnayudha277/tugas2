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

//get data request get tidak boleh ada body
//post submit/store data
//put update data
//delete hapus data


//urutan router
//1 path ,eg
//2 controller
//3
//4


Route::get('/index', "DashboardController@index"); 
Route::get('/index/tambah','DashboardController@tambah');
Route::post('/index/store','DashboardController@store');
Route::get('/index/edit/{nim}','DashboardController@edit');
Route::post('/index/update','DashboardController@update');
Route::get('/index/hapus/{id}','DashboardController@hapus');
Route::get('/index/detail/{id}','DashboardController@detail');
	// function () {
	// // mengembalikan view
 //    return view('dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
