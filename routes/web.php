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
//_________USER__________//
Route::get('/','PagesController@home')->name('home');
Route::get('/tentang-sekolah', 'PagesController@tentang')->name('tentang-sekolah');
Route::get('/kegiatan-harian', 'PagesController@kegiatanharian')->name('kegiatan-harian');
Route::get('/kegiatan-besar', 'PagesController@kegiatanbesar')->name('kegiatan-besar');
Route::get('/fasilitas', 'PagesController@fasilitas')->name('fasilitas');
Route::get('/hubungi', 'PagesController@hubungi')->name('hubungi');
Route::resource('/form-pendaftaran', 'PendaftaranController')->middleware('auth');
Route::get('/siswa-tagihan.dashboard', 'SiswaController@index')->name('siswa-tagihan')->middleware('auth');




//_________ADMIN________//
Route::prefix('Admin-Tk')->middleware(['auth','isAdmin'])->namespace('Admin')->group(function() {
        Route::get('/','DashboardController@index')->name('Dashboard');
        Route::get('/pendaftaran','PendaftaranController@index')->name('pendaftaran');

}); 



Auth::routes();

