<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TreeController@index')->name('tree.index');
Route::post('/championships/{championship}/trees', 'TreeController@store')->name('tree.store');
Route::put('/championships/{championship}/trees', 'TreeController@update')->name('tree.update');
