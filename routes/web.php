<?php

Route::namespace('Web')->group(function () {
  Route::get('/', ['uses' => 'SiteController@Index']);
  Route::get('sobre', ['uses' => 'SiteController@AboutUs']);
  Route::get('vantagens', ['uses' => 'SiteController@Benefits']);
  Route::get('clientes', ['uses' => 'SiteController@Customers']);
  Route::get('planos', ['uses' => 'SiteController@Plains']);
  Route::get('planos/contratar/{plain}', ['uses' => 'HireController@Index']);
  Route::get('contato', ['uses' => 'SiteController@Contact']);

  Route::get('qrcode/invalido', ['uses' => 'SiteController@InvalidQrCode']);
  Route::get('v/{code}', ['uses' => 'QRCodeController@Index']);

});
