<?php
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