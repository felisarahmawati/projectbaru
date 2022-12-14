<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\Admin\Kategori\PaketController;
use App\Http\Controllers\Admin\Transaksi\PembayaranController;
use App\Http\Controllers\Admin\Transaksi\KonfirmasiPembayaranController;
use App\Http\Controllers\Admin\Transaksi\DataTransaksiController;
use App\Http\Controllers\Admin\Jadwal\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('landing', [
        "title" => "Home"
    ]);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/admin/home', 'App\Http\Controllers\HomeController@handleAdmin')->name('admin.route')->middleware('admin');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('sewa/{id}', [App\Http\Controllers\SewaController::class, 'index']);
Route::post('sewa/{id}', [App\Http\Controllers\SewaController::class, 'sewa']);

//Paket
Route::get('/admin/kategori/paket/index', 'App\Http\Controllers\Admin\Kategori\PaketController@index');

//Menunggu pembayaran
Route::get('/admin/transaksi/pembayaran/index', 'App\Http\Controllers\Admin\Transaksi\PembayaranController@index');

//Menunggu transaksi
Route::get('/admin/transaksi/konfirmasi/index', 'App\Http\Controllers\Admin\Transaksi\KonfimasiPembayaranController@index');

//Data Transaksi
Route::get('/admin/transaksi/datatransaksi/index', 'App\Http\Controllers\Admin\Transaksi\DataTransaksiController@index');

//Jawab
Route::get('/admin/jadwal/index', 'App\Http\Controllers\Admin\Jadwal\BookingController@index');

Route::controller('/dashboard/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/about', function () {
    return view('About', [
        "title" => "About"
    ]);
});
Route::get('/contact', function () {
    return view('Contact',[
        "title" => "Contact"
    ]);
});
Route::get('/blog', function () {

    return view('Posts',[
        "title" => "Posts"
    ]);
});

Route::get('/categories', function () {
    return view('Categories',[
        "title" => "Categories"
    ]);
});

// Route::get('/dashboard/dashboard', function () {
//     return view('/dashboard/dashboard',[
//         "title" => "Dashboard"
//     ]);
// });
// Route::get('/formulir', function () {
//     return view('Formulir',[
//         "title" => "Formulir"
//     ]);
// });
Route::get('/detail', function () {
    return view('/layouts/detail',[
        "title" => "Detail"
    ]);
});

Route::get('/transaksi', function () {
    return view('/layouts/transaksi',[
        "title" => "Transaksi"
    ]);
});
//alat
Route::get('/tambah', function () {
    return view('/alat/tambah',[
    ]);
});
Route::get('/alat', 'App\Http\Controllers\AdminController@index');
Route::get('/alat/tambah','App\Http\Controllers\AdminController@create');
Route::get('/alat/edit/{id}', 'App\Http\Controllers\AdminController@edit');
Route::post('/alat/update', 'App\Http\Controllers\AdminController@update');
Route::get('/alat/destroy/{id}', 'App\Http\Controllers\AdminController@destroy');
Route::post('/alat/store', 'App\Http\Controllers\AdminController@store');
Route::resource('/transaksi', 'App\Http\Controllers\TransaksiController');

//laporan
// form laporan
Route::get('laporan', 'App\Http\Controllers\LaporanController@index');
// proses laporan
Route::get('proseslaporan', 'App\Http\Controllers\LaporanController@proses');

Route::resource('transaksi', 'App\Http\Controllers\TransaksiController');

Route::resource('profiladmin', 'App\Http\Controller\UserController');
//Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', function() {
//     return view('dashboard.dashboard');
//     })    ->middleware('auth');

     // profil
  Route::get('user', 'App\Http\Controllers\UserController@index');
  // setting profil
  Route::get('setting', 'App\Http\Controllers\UserController@setting');

Route::get('kategori/alat', 'App\Http\Controllers\AdminController@showAlat');

//check-out
Route::get('check-out', 'App\Http\Controllers\SewaController@check_out');
Route::delete('check-out/', 'App\Http\Controllers\SewaController@delete');
//konfirmasi check-out
Route::get('konfirmasi-check-out/{id}', 'App\Http\Controllers\SewaController@konfirmasi');

//profile
Route::get('profil', 'App\Http\Controllers\ProfilController@index');
Route::post('profil', 'App\Http\Controllers\ProfilController@update');
Route::post('/confirm_bayar', 'App\Http\Controllers\TransaksiController@confirm_bayar');
//History
Route::get('history', 'App\Http\Controllers\HistoryController@index');
Route::get('history/{id}', 'App\Http\Controllers\HistoryController@detail');

//Formulir
Route::get('formulir/{id}','App\Http\Controllers\FormulirController@index');
Route::post('formulir', 'App\Http\Controllers\FormulirController@store');

Route::get('/cetak', 'App\Http\Controllers\CetakController@cetak');

Route::get('/data', 'App\Http\Controllers\DataController@index');
Route::post('/data', 'App\Http\Controllers\DataController@laporan');


// Route::get('/formulir', 'App\Http\Controllers\FormulirController@index');
// Route::get('/formulir/tambah','App\Http\Controllers\FormulirController@create');
// Route::get('/formulir/edit/{id}', 'App\Http\Controllers\FormulirController@edit');
// Route::post('/formulir/update', 'App\Http\Controllers\FormulirController@update');
// Route::get('/formulir/destroy/{id}', 'App\Http\Controllers\FormulirController@destroy');
// Route::post('/formulir/store', 'App\Http\Controllers\FormulirController@store');
