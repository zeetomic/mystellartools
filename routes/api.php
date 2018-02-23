<?php

/*
| --------------------------------------------------------------------------
| Public routes
| --------------------------------------------------------------------------
*/

Route::get('federation', 'FederationController@show')->name('federation');
Route::post('federation', 'FederationController@store')->name('federation.store');

Route::get('prices', 'PriceController')->name('prices');

Route::get('claim', 'ClaimController')->middleware('throttle:10,1');
Route::post('revoke', 'RevokeController')->middleware('throttle:10,1');

Route::resource('peers', 'PeersController')->only(['index', 'store']);

Route::post('peers/{public_key}/ledgers', 'PeerLedgersController@store');