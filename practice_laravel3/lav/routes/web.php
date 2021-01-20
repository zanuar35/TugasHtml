<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','MyController@index')->name('index');
Route::get('/tentang','MyController@about')->name('about');
Route::get('/mahasiswa','StudentController@index')->name('student.index');
Route::get('/mahasiswa/tambah','StudentController@create')->name('student.create');
Route::post('/mahasiswa/tambah','StudentController@store')->name('student.store');
Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');
Route::put('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');
Route::delete('/mahasiswa/hapus/{id}','StudentController@destroy')->name('student.destroy');
Route::get('mahasiswa/data','StudentController@data')->name('student.data');
Route::get('mahasiswa/data/hapus/{id}','StudentController@data_destroy')->name('student.data.destroy');

/*

//Route::get('/', function () {
  //  return view('welcome');
//});

*/