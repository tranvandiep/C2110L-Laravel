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

// Route Category
// Route::get('/category/index', [App\Http\Controllers\CategoryController::class, 'index']);
// Route::get('/category/add', [App\Http\Controllers\CategoryController::class, 'add']);
// Route::post('/category/postAdd', [App\Http\Controllers\CategoryController::class, 'postAdd']);
// Route::get('/category/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
// Route::post('/category/postEdit', [App\Http\Controllers\CategoryController::class, 'postEdit']);
// Route::get('/category/delete', [App\Http\Controllers\CategoryController::class, 'delete']);
// Route::post('/category/postDelete', [App\Http\Controllers\CategoryController::class, 'postDelete']);

Route::controller(App\Http\Controllers\CategoryController::class)
    ->prefix('category')
    ->group(function() {
    Route::get('/index', 'index')->name('category.index');
    Route::get('/add', 'add')->name('category.add');
    Route::post('/postAdd', 'postAdd')->name('category.postAdd');
    Route::get('/{id}/edit', 'edit')->name('category.edit');
    Route::post('/postEdit', 'postEdit')->name('category.postEdit');
    Route::get('/{id}/delete', 'delete')->name('category.delete');
    Route::post('/postDelete', 'postDelete')->name('category.postDelete');
});