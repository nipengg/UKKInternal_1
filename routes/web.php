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
    return redirect('/students');
});
Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students/store', 'StudentController@store');
Route::get('/students/edit/{no_reg}', 'StudentController@edit');
Route::post('/students/update/{no_reg}', 'StudentController@update');
Route::get('/students/delete/{no_reg}', 'StudentController@destroy');
Route::get('/students/cetak_pdf', 'StudentController@cetak_pdf');
Route::get('/students/cetak_pdf_student/{no_reg}', 'StudentController@cetak_pdf_student');