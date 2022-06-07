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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/xem-thong-tin-sinh-vien.html', function() {
    echo 'Welcome to learn Laravel';
});

Route::get('/xem-thong-tin-sinh-vien-1.html', function() {
    return view('test.test01');
});

Route::get('/xem-thong-tin-sinh-vien-2.html', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/xem-thong-tin-sinh-vien-3.html', [App\Http\Controllers\TestController::class, 'test']);

Route::get('/bai-viet/{hrefPram}.html', [App\Http\Controllers\TestController::class, 'test2']);

Route::get('/tong/x/{x}/y/{y}.html', [App\Http\Controllers\TestController::class, 'test3']);
