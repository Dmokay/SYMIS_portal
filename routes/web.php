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
    return view('welcome');
});
Route::get('/create-principal', function () {
    return view('create_principal');
});
Route::post('/save-principal', 'PrincipalsController@store');

Route::get('/show-principal', 'PrincipalsController@show')->name('p.display');

Route::get('/create-guardian', function () {
    return view('create_guardian');					//create guardian
});
Route::post('/save-guardian', 'GuardiansController@store'); //save guardian

Route::get('/show-guardian', 'GuardiansController@show')->name('g.display'); //Display guardian saved

Route::get('/create-teacher', function () {
    return view('create_teacher');
});
Route::post('/save-teacher', 'TeachersController@store');

Route::get('/show-teacher', 'TeachersController@show')->name('t.display');

Route::get('/create-pta', function () {
    return view('create_pta');
});
Route::post('/save-pta', 'PtaController@store');

Route::get('/show-pta', 'PtaController@show')->name('pta.display');

Route::get('/create-student', function () {
    return view('create_student');
});
Route::post('/save-student', 'StudentsController@store');

Route::get('/show-student', 'StudentsController@show')->name('s.display');


Route::get('/symisadmin', function () {
    return view('symisadmin');
});

Route::get('/panel', 'PanelController@panelPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
