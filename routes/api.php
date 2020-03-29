<?php
Route::resource('users', 'API\UserAPIController');
Route::resource('qrcodes', 'API\QRCodesAPIController');
Route::get('qrcode/{id}', 'API\QRCodesAPIController@getQrCode');
Route::resource('scans', 'API\ScansAPIController');
Route::resource('groups', 'API\QRCodesGroupsAPIController');
Route::get('srv', 'API\QRCodesAPICOntroller@srv');
