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

Auth::routes();

Route::get('conditions', function (){
    return view('conditions.conditions');
})->name('conditions');

Route::post('permissions','Permissions\PermissionsController@index')->name('permissions');

Route::get('/', 'Home\HomeController@index')->name('home');

Route::group(['prefix'=>'recover'], function (){
    Route::get('recover','Recover\RecoverController@index')->name('recover.recover');
    Route::put('recover','Recover\RecoverController@store')->name('recover.store');
    Route::get('mail','Recover\MailController@index')->name('recoverMail.show');
    Route::post('mail','Recover\MailController@return')->name('recoverMail.return');
    Route::put('mail','Recover\MailController@store')->name('recoverMail.store');
    Route::get('sq','Recover\SqController@show')->name('recoverSq.show');
    Route::post('sq','Recover\SqController@store')->name('recoverSq.store');
    Route::put('sq','Recover\SqController@update')->name('recoverSq.update');
});

Route::namespace('Auth\Password')->prefix('password')->middleware('guest')->group(function (){
    Route::get('target','TargetController@index')->name('reset.target.show');
    Route::put('target','TargetController@store')->name('reset.target.store');
    Route::get('last_password/{token}','last_passwordController@index')->name('reset.lp.show');
    Route::put('last_password/{token}','last_passwordController@store')->name('reset.lp.store');
    Route::get('sq/{token}','sqController@index')->name('reset.sq.show');
    Route::put('sq/{token}','sqController@store')->name('reset.sq.store');
    Route::get('mail/{token}','mailController@index')->name('reset.mail.show');
    Route::put('mail/{token}','mailController@store')->name('reset.mail.store');
    Route::get('newPassword/{token}','NpswController@index')->name('reset.npsw.show');
    Route::put('newPassword/{token}','NpswController@store')->name('reset.npsw.store');
});