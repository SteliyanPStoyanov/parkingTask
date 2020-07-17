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
/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    Route::get('/', 'ParkingController@index')->name('list');
    Route::get('/park', 'ParkingController@park')->name('park');
    Route::post('/park', 'ParkingController@store');
    Route::get('/unpark', 'ParkingController@unpark')->name('unpark');
    Route::post('/unpark', 'ParkingController@destroy');
    Route::get('/search', 'ParkingController@search');
});
