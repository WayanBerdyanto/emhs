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

Route::get('/','PageController@home');
Route::get('/account','PageController@account');
Route::get('/pelamar','PageController@pelamar');
Route::get('/product/detailproduct/{id}','PageController@detailproduct');
// Tambah FormPelamar
Route::get('/pelamar/formtambahpelamar', 'PageController@formtambahpelamar');
// Simpan Pelamar
Route::post('/pelamar/simpanpelamar', 'PageController@simpanpelamar');
// Detail Pelamar
Route::get('/pelamar/detailpelamar/{id}','PageController@detailpelamar');
// Edit Pelamar
Route::get('/pelamar/formeditpelamar/{id}','PageController@formeditpelamar');
Route::put('/pelamar/simpaneditpelamar/{id}','PageController@simpaneditpelamar');
// Delete Pelamar
Route::get('/pelamar/deletepelamar/{id}','PageController@deletepelamar');

Route::get('/product','PageController@product');
Route::get('/reporting','PageController@reporting');
// Form Tambah
Route::get('/product/formtambah','PageController@formtambah');
// Simpan Data
Route::post('/product/simpanData','PageController@simpanData');
// Detail Products
