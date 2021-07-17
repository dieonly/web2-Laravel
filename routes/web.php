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

//Routing Mahasiswa
Route::get('mahasiswa', 'MahasiswaController@index')->name('mhs');
Route::get('mhs-create', 'MahasiswaController@create')->name('mhs.create');
Route::post('mhs-simpan', 'MahasiswaController@store')->name('mhs.simpan');
Route::get('mhs-edit/{id}', 'MahasiswaController@edit')->name('mhs.edit');
Route::post('mhs-update/{id}', 'MahasiswaController@update')->name('mhs.update');
Route::get('mhs-hapus/{id}', 'MahasiswaController@destroy')->name('mhs.hapus');


//Routing Matkul
Route::get('makul', 'MakulController@index')->name('makul');
Route::get('makul-create', 'MakulController@create')->name('makul.create');
Route::post('makul-simpan', 'MakulController@store')->name('makul.simpan');
Route::get('makul-edit/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('makul-update/{id}', 'MakulController@update')->name('makul.update');
Route::get('makul-hapus/{id}', 'MakulController@destroy')->name('makul.hapus');

//Routing Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai.hapus');
