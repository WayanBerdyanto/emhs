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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PageController@home');
Route::get('/profile', 'PageController@profile');

Route::get('/mahasiswa', 'PageController@mahasiswa');
Route::get('/mahasiswa/find', 'PageController@find');
Route::get('/mahasiswa/formtambah', 'PageController@tambah');
Route::post('/mahasiswa/simpan', 'PageController@simpan');
Route::get('/mahasiswa/desc', 'PageController@desc');
Route::get('/mahasiswa/formedit/{id}', 'PageController@edit');

// Route::post('/mahasiswa/updatemhs/{id}', 'PageController@updatemhs');
Route::put('/mahasiswa/updatemhs/{id}', 'PageController@updatemhs');

// Route::get('/mahasiswa/deletemhs/{id}', 'PageController@deletemhs');

Route::get('/mahasiswa/deletemhs/{id}', 'PageController@deletemhs');

Route::get('/contact', 'PageController@contact');

Route::get('/artikel', function(){
    return view('artikel', ['key' => 'artikel']);
}
);