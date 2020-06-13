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

//---------------- BAGIAN CLIENT --------------------------
Route::get('/', 'ClientController@index')->name('client');

Route::get('/kontak', 'ClientController@contact')->name('client.kontak');

Route::get('/search-articles/{id}', 'ClientController@searchArticles');

Route::get('/daftar-berita/{id}', 'ClientController@showNews');

Route::get('/daftar-berita/detil-berita/{id}', 'ClientController@showDetailNews');



//---------------- BAGIAN ADMIN --------------------------
Route::get('/home', 'HomeController@index')->name('home');

//---------------- BAGIAN BERITA --------------------------
Route::get('/artikel', 'BeritaController@index')->name('artikel.index')->middleware('auth');

Route::get('/artikel-datatable', 'BeritaController@datatable')->name('artikel.datatable')->middleware('auth');

Route::get('/create-artikel', 'BeritaController@create')->name('artikel.create')->middleware('auth');

Route::get('/edit-artikel/{id}', 'BeritaController@edit')->name('artikel.edit')->middleware('auth');

Route::post('/update-artikel', 'BeritaController@update')->name('artikel.update')->middleware('auth');

Route::post('/store-artikel', 'BeritaController@store')->name('artikel.store')->middleware('auth');

Route::post('/delete-artikel', 'BeritaController@delete')->name('artikel.delete')->middleware('auth');

Route::post('/detail-artikel', 'BeritaController@detailBerita')->name('artikel.detail')->middleware('auth');



// -------------- KATEGORI BERITA --------------------------------
Route::get('/kategori-artikel', 'BeritaController@indexKategori')->name('kategori.artikel')->middleware('auth');

Route::post('/store-kategori-artikel', 'BeritaController@storeKategori')->name('store.kategori.artikel')->middleware('auth');

Route::post('/update-kategori-artikel', 'BeritaController@updateKategori')->name('update.kategori.artikel')->middleware('auth');

Route::post('/delete-kategori-artikel', 'BeritaController@deleteKategori')->name('delete.kategori.artikel')->middleware('auth');

Route::get('/kategori-datatable', 'BeritaController@kategoriDatatable')->name('kategori.artikel.datatable')->middleware('auth');



// --------------- TAG BERITA ------------------------------
Route::post('/tag-berita', 'BeritaController@tagBerita')->name('tag.berita.desa.get')->middleware('auth');

Route::get('/tag-berita-list', 'BeritaController@indexTag')->name('tag.berita.desa')->middleware('auth');

Route::post('/store-tag-berita', 'BeritaController@storeTag')->name('store.tag.berita.desa')->middleware('auth');

Route::post('/update-tag-berita', 'BeritaController@updateTag')->name('update.tag.berita.desa')->middleware('auth');

Route::post('/delete-tag-berita', 'BeritaController@deleteTag')->name('delete.tag.berita.desa')->middleware('auth');

Route::get('/tag-berita-datatable', 'BeritaController@tagDatatable')->name('tag.artikel.datatable')->middleware('auth');

Route::get('/buat-tag-berita', 'BeritaController@createTag')->name('buat.tag.berita.desa')->middleware('auth');

Auth::routes();
