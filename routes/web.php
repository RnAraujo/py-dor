<?php


Route::get('/', function () {
    return view('welcome');

//    $raciones = \App\Ration::findOrFail(1);
//
//    return $raciones->ingredients;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('grupos', 'GroupController');
Route::get('grupos/close/{id}', 'GroupController@close')->name('grupos.close');

Route::resource('ingredientes', 'IngredientController');
Route::resource('raciones', 'RationController');
Route::resource('tipos', 'TypeBeneficiaryController');
Route::resource('dependencias', 'DependencyController');
Route::resource('beneficiados', 'BenefitedController');

Route::resource('hojas', 'SheetController');
Route::post('hojas/check', 'SheetController@check')->name('hojas.check');
