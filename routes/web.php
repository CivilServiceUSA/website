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

Route::get('state', 'StateController@index');
Route::get('state/{state}', 'StateController@getState');

Route::get('us-house', 'FederalHouseController@index');
Route::get('us-house/{state}', 'FederalHouseController@getState');

Route::get('us-senate', 'FederalSenateController@index');
Route::get('us-senate/list/{filter}', 'FederalSenateController@getList');

Route::get('us-senate/{state}', 'FederalSenateController@getState');