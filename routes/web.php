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

// Route::get('/', function () {
//     return view('welcome');
// });

//---------------- BAGIAN CLIENT --------------------------
Route::get('/', 'ClientController@index')->name('client');

Route::get('/kontak', 'ClientController@contact')->name('client.kontak');

Route::get('/search-articles/{id}', 'ClientController@searchArticles');

Route::get('/daftar-berita/{id}', 'ClientController@showNews');

Route::get('/daftar-berita/detil-berita/{id}', 'ClientController@showDetailNews');



//---------------- BAGIAN ADMIN --------------------------
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

Route::get('/create-berita', 'BeritaController@create')->name('berita.desa.create')->middleware('auth');

Route::get('/edit-berita/{id}', 'BeritaController@edit')->name('berita.desa.edit')->middleware('auth');

Route::post('/update-berita', 'BeritaController@update')->name('berita.desa.update')->middleware('auth');

Route::post('/store-berita', 'BeritaController@store')->name('berita.desa.store')->middleware('auth');

Route::post('/delete-berita', 'BeritaController@delete')->name('berita.desa.delete')->middleware('auth');

Route::post('/detail-berita', 'BeritaController@detailBerita')->name('berita.desa.detail')->middleware('auth');



// -------------- KATEGORI BERITA --------------------------------
Route::get('/kategori-berita', 'BeritaController@indexKategori')->name('kategori.berita.desa')->middleware('auth');

Route::post('/store-kategori-berita', 'BeritaController@storeKategori')->name('store.kategori.berita.desa')->middleware('auth');

Route::post('/update-kategori-berita', 'BeritaController@updateKategori')->name('update.kategori.berita.desa')->middleware('auth');

Route::post('/delete-kategori-berita', 'BeritaController@deleteKategori')->name('delete.kategori.berita.desa')->middleware('auth');

Route::get('/kategori-datatable', 'BeritaController@kategoriDatatable')->name('kategori.desa.datatable')->middleware('auth');



// --------------- TAG BERITA ------------------------------
Route::post('/tag-berita', 'BeritaController@tagBerita')->name('tag.berita.desa.get')->middleware('auth');

Route::get('/tag-berita-list', 'BeritaController@indexTag')->name('tag.berita.desa')->middleware('auth');

Route::post('/store-tag-berita', 'BeritaController@storeTag')->name('store.tag.berita.desa')->middleware('auth');

Route::post('/update-tag-berita', 'BeritaController@updateTag')->name('update.tag.berita.desa')->middleware('auth');

Route::post('/delete-tag-berita', 'BeritaController@deleteTag')->name('delete.tag.berita.desa')->middleware('auth');

Route::get('/tag-berita-datatable', 'BeritaController@tagDatatable')->name('tag.berita.desa.datatable')->middleware('auth');

Route::get('/buat-tag-berita', 'BeritaController@createTag')->name('buat.tag.berita.desa')->middleware('auth');



//---------------- BAGIAN PEMERINTAHAN --------------------------
Route::get('/pemerintahan-desa', 'PemerintahanController@index')->name('pemerintahan.desa.index')->middleware('auth');

Route::get('/pemerintahan-datatable', 'PemerintahanController@datatable')->name('pemerintahan.desa.datatable')->middleware('auth');

Route::get('/create-info-pemerintahan', 'PemerintahanController@create')->name('pemerintahan.desa.create')->middleware('auth');

Route::get('/edit-info-pemerintahan/{id}', 'PemerintahanController@edit')->name('pemerintahan.desa.edit')->middleware('auth');

Route::post('/update-info-pemerintahan', 'PemerintahanController@update')->name('pemerintahan.desa.update')->middleware('auth');

Route::post('/store-info-pemerintahan', 'PemerintahanController@store')->name('pemerintahan.desa.store')->middleware('auth');

Route::post('/delete-info-pemerintahan', 'PemerintahanController@delete')->name('pemerintahan.desa.delete')->middleware('auth');



// -------------- KATEGORI PEMERINTAHAN --------------------------------
Route::get('/kategori-pemerintahan', 'PemerintahanController@indexKategori')->name('kategori.pemerintahan.desa')->middleware('auth');

Route::post('/store-kategori-pemerintahan', 'PemerintahanController@storeKategori')->name('store.kategori.pemerintahan.desa')->middleware('auth');

Route::post('/update-kategori-pemerintahan', 'PemerintahanController@updateKategori')->name('update.kategori.pemerintahan.desa')->middleware('auth');

Route::post('/delete-kategori-pemerintahan', 'PemerintahanController@deleteKategori')->name('delete.kategori.pemerintahan.desa')->middleware('auth');

Route::get('/kategori-pemerintahan-datatable', 'PemerintahanController@kategoriDatatable')->name('kategori.pemerintahan.desa.datatable')->middleware('auth');


Auth::routes();
