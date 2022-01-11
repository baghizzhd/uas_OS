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
// Route::get('/', function () {
//     if (session()->has('user')) {
//         return redirect('/login_done');
//     }
//     return redirect('/no_login');
// });
// Route::get('/login_done', [LoginController::class, 'login_done']);
// Route::get('/no_login', [LoginController::class, 'no_login']);

Route::post('/login2','App\Http\Controllers\RiwayatController@logindata');
Route::post('/daftar1','App\Http\Controllers\RiwayatController@regis_data');
Route::get('/Sewa', function () {
    return view('Sewa');
});

Route::get('/Riwayat','App\Http\Controllers\RiwayatController@Riwayat');

Route::get('/Hubungi', function () {
    return view('Hubungi');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/LupaPass', function () {
    return view('LupaPass');
});
Route::get('/Keranjang', function () {
    return view('Keranjang');
});
Route::get('/Footer', function () {
    return view('Footer');
});
Route::get('/Daftar', function () {
    return view('Daftar');
});
Route::get('/Konfirmasi', function () {
    return view('Konfirmasi');
});
Route::get('/Transaksi', function () {
    return view('Transaksi');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
});
Route::get('/Dashboard2', function () {
    return view('Dashboard2');
});
Route::get('/Invoice', function () {
    return view('Invoice');
});
Route::get('/TentangKami', function () {
    return view('TentangKami');
});
Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/DetailProduk', function () {
    return view('DetailProduk');
});
