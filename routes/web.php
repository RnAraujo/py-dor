<?php


Route::get('/', function () {
    return view('welcome');

//    $raciones = \App\Ration::findOrFail(1);
//
//    return $raciones->ingredients;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ingredientes', 'IngredientController');