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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//---------------- BAGIAN KEPENDUDUKAN --------------------------
Route::get('/kependudukan', 'KependudukanController@index')->name('penduduk.desa.index')->middleware('auth');

Route::get('/kependudukan-datatable', 'KependudukanController@datatable')->name('penduduk.desa.datatable')->middleware('auth');

Route::get('/create-kependudukan', 'KependudukanController@create')->name('penduduk.desa.create')->middleware('auth');

Route::post('/update-kependudukan', 'KependudukanController@update')->name('penduduk.desa.update')->middleware('auth');

Route::post('/store-kependudukan', 'KependudukanController@store')->name('penduduk.desa.store')->middleware('auth');

Route::post('/import-excel-kependudukan', 'KependudukanController@importExcelFile')->name('import.excel.file')->middleware('auth');

Route::post('/delete-kependudukan', 'KependudukanController@delete')->name('penduduk.desa.delete')->middleware('auth');


//---------------- BAGIAN BERITA --------------------------
Route::get('/berita-desa', 'BeritaController@index')->name('berita.desa.index')->middleware('auth');

Route::get('/berita-datatable', 'BeritaController@datatable')->name('berita.desa.datatable')->middleware('auth');

Route::get('/tag-berita-datatable', 'BeritaController@tagDatatable')->name('tag.berita.desa.datatable')->middleware('auth');

Route::post('/tag-berita', 'BeritaController@tagBerita')->name('tag.berita.desa.get')->middleware('auth');

Route::get('/create-berita', 'BeritaController@create')->name('berita.desa.create')->middleware('auth');

Route::get('/edit-berita/{id}', 'BeritaController@edit')->name('berita.desa.edit');

Route::post('/update-berita', 'BeritaController@update')->name('berita.desa.update')->middleware('auth');

Route::post('/store-berita', 'BeritaController@store')->name('berita.desa.store')->middleware('auth');

Route::post('/delete-berita', 'BeritaController@delete')->name('berita.desa.delete')->middleware('auth');

Route::post('/detail-berita', 'BeritaController@detailBerita')->name('berita.desa.detail')->middleware('auth');

Auth::routes();
