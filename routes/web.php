<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\NyariController;
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
Route::get('/detail-member', function () {
    return view('member.detail-member');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('member', MemberController::class);
Route::resource('nyari', NyariController::class);


Route::get('/dashboard', function () {
    return view('dashboard.dash');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';