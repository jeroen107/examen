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


/**
 * hier staan de routes wat hier gebeurt is dat je en link oproept die in de views staan en die stuur je naar de controllers toe zonder de routes krijg je nooit de link
 */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers', 'CustomerController@index')->name('customer.index')->middleware('auth');
Route::get('/customer-create', 'CustomerController@create')->name('customer.create')->middleware('auth');
Route::post('/customer-store', 'CustomerController@store')->name('customer.store')->middleware('auth');
Route::get('/customer-edit/{id}', 'CustomerController@edit')->name('customer.edit')->middleware('auth');
Route::post('/customer-update', 'CustomerController@update')->name('customer.update')->middleware('auth');
Route::delete('/customer-delete/', 'CustomerController@delete')->name('customer.delete')->middleware('auth');
Route::get('/customer-show/{id}', 'CustomerController@show')->name('customer.show')->middleware('auth');

Route::get('/pet-create/{owner_id}', 'PetController@create')->name('pet.create')->middleware('auth');
Route::post('/pet-store', 'PetController@store')->name('pet.store')->middleware('auth');
Route::get('/pet-edit/{id}', 'PetController@edit')->name('pet.edit')->middleware('auth');
Route::post('/pet-update', 'PetController@update')->name('pet.update')->middleware('auth');
Route::delete('/pet-delete/', 'PetController@delete')->name('pet.delete')->middleware('auth');
