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

Route::get('/home', 'HomeController@index')->name('home');

//routing Mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mhs.index');
Route::get('mhs-create', 'MahasiswaController@create')->name('mhs.create');


//Routing Matkul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-create', 'MakulController@create')->name('makul.create');
Route::post('makul-simpan', 'MakulController@store')->name('makul.simpan');
Route::get('makul-edit/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('makul-update/{id}', 'MakulController@update')->name('makul.update');
Route::get('makul-hapus/{id}', 'MakulController@destroy')->name('makul.hapus');

