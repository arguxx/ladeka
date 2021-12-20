<?php

use App\Http\Controllers\MemberController;
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
    return view('auth.login');
});

// Route::resources('member', MemberController::class);

Route::get('/dashboard', function () {
    return view('dashboard.dash');
})->middleware(['auth'])->name('dashboard');

Route::get('/input-paket', function () {
    return view('input-paket.input-paket');
});
Route::get('/input-transaksi', function () {
    return view('input-transaksi.input-transaksi');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/tambah-member', function () {
    return view('tambah-member.tambah-member');
});
Route::get('/list-member', function () {
    return view('list-member.list-member');
});
Route::get('/detail-member', function () {
    return view('detail-member.detail-member');
});
Route::get('/paket', function () {
    return view('paket.paket');
});
require __DIR__.'/auth.php';