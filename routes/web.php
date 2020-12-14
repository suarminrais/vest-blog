<?php


Route::get('/', 'HomeController@index');
Route::get('/{slug}', 'HomeController@view');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('invoice', function(){
//     return view('invoice');
// });

// Route::get('{path}',"HomeController@index")->where( 'path', '[A-Za-z]+' );
