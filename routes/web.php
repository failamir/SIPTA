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

Route::resource('admin/ukt', 'Admin\\UktController');
Route::resource('admin/ukt', 'Admin\\UktController');
Route::resource('admin/daftar_-ukt', 'Admin\\Daftar_UktController');
Route::resource('admin/sabuk', 'Admin\\SabukController');
Route::resource('admin/berita', 'Admin\\BeritaController');
Route::resource('admin/anggota', 'Admin\\AnggotaController');
Route::resource('admin/detail_-prestasi_-ukm', 'Admin\\Detail_Prestasi_UkmController');
Route::resource('admin/prestasi', 'Admin\\PrestasiController');
Route::resource('admin/kejuaraan', 'Admin\\KejuaraanController');
Route::resource('admin/daftar_-kejuaraan', 'Admin\\Daftar_KejuaraanController');
Route::resource('admin/cabang', 'Admin\\CabangController');
Route::resource('admin/kejuaraan', 'Admin\\KejuaraanController');
Route::resource('admin/kejuaraan', 'Admin\\KejuaraanController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
