<?php

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

Route::get('/', 'HomeController@index');
Route::get('privacy-policy', 'LegalController@showPrivacyPolicy');
Route::get('terms-of-use', 'LegalController@showTermsOfUse');

Route::get('my-elected-officials', 'MyElectedOfficialsController@index');
Route::get('my-elected-officials/zipcode', 'MyElectedOfficialsController@redirect');
Route::get('my-elected-officials/geolocation', 'MyElectedOfficialsController@redirect');
Route::get('my-elected-officials/geolocation/{latitude}', 'MyElectedOfficialsController@redirect');

Route::get('my-elected-officials/zipcode/{zipcode}', 'MyElectedOfficialsController@byZipCode');
Route::get('my-elected-officials/geolocation/{latitude}/{longitude}', 'MyElectedOfficialsController@byGeolocation');

Route::get('state', 'StateController@index');
Route::get('state/{state}', 'StateController@getState');
Route::get('state/{state}/zip-codes', 'StateController@getZipCodes');

Route::get('us-house', 'FederalHouseController@index');
Route::get('us-house/{state}', 'FederalHouseController@getState');
Route::get('us-house/{state}/representative/{name}', 'FederalHouseController@getRepresentative');
Route::get('us-house/list/{filter}', 'FederalHouseController@getList');

Route::get('us-senate', 'FederalSenateController@index');
Route::get('us-senate/{state}', 'FederalSenateController@getState');
Route::get('us-senate/{state}/senator/{name}', 'FederalSenateController@getSenator');
Route::get('us-senate/list/{filter}', 'FederalSenateController@getList');
