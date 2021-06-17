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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'Maincontroller@index')->name('home');
Route::get('/search', 'Maincontroller@search')->name('search');



Route::get('/about', function () {
    return 'About page';
});
    Route::get('/new', function () {
        return view('new');

});

Route::post('/new/{id}/check', 'Maincontroller@check')->name('check');

Route::get('/{id}', 'Maincontroller@showOneUser')->name('contact-data-one');

Route::get('/{id}/delete', 'Maincontroller@deleteUser')->name('contact-delete');
