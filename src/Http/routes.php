<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('przelewy24/standard')->group(function () {
        Route::get('/redirect', 'CNetic\Przelewy24Http\Controllers\StandardController@redirect')->name('przelewy24.standard.redirect');
        Route::get('/success', 'CNetic\Przelewy24Http\Controllers\StandardController@success')->name('przelewy24.standard.success');
        Route::get('/cancel', 'CNetic\Przelewy24Http\Controllers\StandardController@cancel')->name('przelewy24.standard.cancel');
    });
});

Route::get('paypal/standard/ipn', 'CNetic\Przelewy24Http\Controllers\StandardController@ipn')->name('przelewy24.standard.ipn');
Route::post('paypal/standard/ipn', 'CNetic\Przelewy24Http\Controllers\StandardController@ipn')->name('przelewy24.standard.ipn');
