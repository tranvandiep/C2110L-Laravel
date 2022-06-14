<?php

Route::controller(App\Http\Controllers\ProductController::class)
    ->prefix('product')
    ->group(function() {
    Route::get('/index', 'index')->name('product.index');
    Route::get('/create', 'create')->name('product.create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{id}/edit', 'edit')->name('product.edit');
    Route::post('/{id}/update', 'update')->name('product.update');
    Route::get('/{id}/show', 'show')->name('product.show');
    Route::post('/{id}/destroy', 'destroy')->name('product.destroy');
});