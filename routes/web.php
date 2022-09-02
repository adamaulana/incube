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

// Route::get('/', [DashboardController::class,'index']);
Route::get('/', 'DashboardController@index');

// // Autentifikasi
Route::get('/register_mentor', 'DashboardController@register_mentor');
Route::get('/register_siswa', 'DashboardController@register_siswa');
Route::post('/pendaftaran_siswa', 'SiswaController@register_siswa');
Route::get('/logout_siswa', 'SiswaController@logout');
Route::post('/signin', 'SiswaController@login');
// Route::get('/dashboard', 'DashboardController@index');
Route::get('/login', 'DashboardController@login');

// produk
Route::post('/register_produk', 'ProdukController@registerProduk');

// team and member
Route::post('/cari_member', 'SiswaController@searchByNis');
Route::post('/tambah_member','TeamController@tambah_member');
Route::get('/delete_member/{id}','TeamController@delete_member');


//Page Team
Route::get('/tahap_team','TeamController@index');
Route::post('/lock_team','TeamController@lock_team');
Route::get('/tahap_profil','ProfilBisnisController@index');
Route::get('/product_abstract','ProdukController@index');
