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
    TODO::template
    TODO::layout.
    TODO::content
    TODO::errors
    TODO::msg
    TODO::alerte
    TODO::top
    TODO::left
    TODO::right
    TODO::bottom
*/


Auth::routes();

Route::get('conditions', function (){
    return view('conditions.conditions');
})->name('conditions');

Route::post('permissions','Permissions\PermissionsController@index')->name('permissions');

Route::get('/', 'Home\HomeController@index')->name('home');

require_once '../app/Http/Route/Auth.php';
recover();
password();