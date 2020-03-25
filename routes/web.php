<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::success('hello');
    return view('corona');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/edit', 'HomeController@editStatus')->name('edit');

Route::PATCH('/edit', 'HomeController@update')->name('edit.status');

Route::Post('/edit', 'HomeController@editStatus')->name('edit.status');



Route::get('/barcode/edit', 'BarcodeController@editStatus');

Route::resource('barcode', 'BarcodeController');

Route::get('/', 'HomeController@getApiCorona')->name('corona');

