<?php
Route::group(['middleware' => ['web']], function () {
    Route::prefix('przelewy24')->group(function () {

        Route::get('/test-connection', 'CNetic\Przelewy24\Http\Controllers\StandardController@testConnection')->name('przelewy24.test-connection');

        Route::get('/redirect', 'CNetic\Przelewy24Http\Controllers\StandardController@redirect')->name('przelewy24.standard.redirect');
        Route::get('/success', 'CNetic\Przelewy24Http\Controllers\StandardController@success')->name('przelewy24.standard.success');
        Route::get('/cancel', 'CNetic\Przelewy24Http\Controllers\StandardController@cancel')->name('przelewy24.standard.cancel');

    });
});

Route::get('paypal/standard/ipn', 'CNetic\Przelewy24Http\Controllers\StandardController@ipn')->name('przelewy24.standard.ipn');
Route::post('paypal/standard/ipn', 'CNetic\Przelewy24Http\Controllers\StandardController@ipn')->name('przelewy24.standard.ipn');
