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

Route::get('/reciever', 'RecieverController@index')->name('reciever.index');
Route::post('/reciever', 'RecieverController@store')->name('reciever.store');

Route::get('/mail', 'MailController@index')->name('mail.index');
Route::post('/mail', 'MailController@store')->name('mail.store');
Route::patch('/mail/{mail}', 'MailController@update')->name('mail.update');
Route::get('/mail/create', 'MailController@create')->name('mail.create');
Route::get('/mail/edit/{mail}', 'MailController@edit')->name('mail.edit');
