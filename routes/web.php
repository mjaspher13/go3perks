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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('login', 'Auth\LoginController@login');
Route::get('/home', 'HomeController@index')->name('home');

//Agent
Route::group(['prefix' => 'agent', 'middleware' => ['auth','handleRole:3']], function () {
Route::get('/', 'AgentController@Index');
Route::get('/countries', 'AgentController@Countries');
Route::get('/states/{country}', 'AgentController@States');
//Route::get('/cities/{state}', 'AgentController@Cities');
Route::get('/create', 'AgentController@CreateMerchant');
Route::get('/edit/{merchantId}', 'AgentController@ViewMerchant');
});

//Customer
Route::group(['prefix' => 'customer', 'middleware' => ['auth','handleRole:2']], function () {
Route::get('/', 'CustomerController@Index');
});

//Merchant
Route::group(['prefix' => 'merchant', 'middleware' => ['auth','handleRole:1']], function () {
Route::get('/', 'MerchantController@Index');
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth','handleRole:4']], function () {
Route::get('/', 'AdminController@Index');
Route::get('/clients', 'AdminController@Clients');
Route::get('/authorizedclients', 'AdminController@AuthorizedClients');
Route::get('/personalaccesstokens', 'AdminController@PersonalAccessTokens');
});

