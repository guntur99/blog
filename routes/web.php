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

// BAGIAN ADMIN
Route::get('/kependudukan', 'KependudukanDesa@index')->name('penduduk.desa.index')->middleware('auth');

Route::get('/kependudukan-datatable', 'KependudukanDesa@datatable')->name('penduduk.desa.datatable')->middleware('auth');

Route::get('/create-kependudukan', 'KependudukanDesa@create')->name('penduduk.desa.create')->middleware('auth');

Route::post('/update-kependudukan', 'KependudukanDesa@update')->name('penduduk.desa.update')->middleware('auth');

Route::post('/store-kependudukan', 'KependudukanDesa@store')->name('penduduk.desa.store')->middleware('auth');

Route::post('/import-excel-kependudukan', 'KependudukanDesa@importExcelFile')->name('import.excel.file')->middleware('auth');

Route::post('/delete-kependudukan', 'KependudukanDesa@delete')->name('penduduk.desa.delete')->middleware('auth');

Auth::routes();
