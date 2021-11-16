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
    return view('loading.loading');
});
Route::get('/input-paket', function () {
    return view('input-paket.input-paket');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/list-member', function () {
    return view('list-member.list-member');
});