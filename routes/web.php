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

Route::get('/individual-principal/{id}', 'PrincipalsController@individual')->name('display_principal');

Route::get('/edit-principal/{id}', 'PrincipalsController@edit')->name('edit_principal');

Route::post('/update-principal/', 'PrincipalsController@update')->name('update_principal');

Route::get('/delete-principal/{id}', 'PrincipalsController@delete')->name('delete-principal');

Route::get('/create-guardian', function () {
    return view('create_guardian');					//create guardian
});
Route::post('/save-guardian', 'GuardiansController@store'); //save guardian

Route::get('/show-guardian', 'GuardiansController@show')->name('g.display'); //Display guardian saved

Route::get('/individual-guardian/{id}', 'GuardiansController@individual')->name('display_guardian');

Route::get('/edit-guardian/{id}', 'GuardiansController@edit')->name('edit_guardian');

Route::post('/update-guardian/', 'GuardiansController@update')->name('update_guardian');

Route::get('/delete-guardian/{id}', 'GuardiansController@delete')->name('delete-guardian');

Route::get('/create-teacher', function () {
    return view('create_teacher');
});
Route::post('/save-teacher', 'TeachersController@store');

Route::get('/show-teacher', 'TeachersController@show')->name('t.display');

Route::get('/individual-teacher/{id}', 'TeachersController@individual')->name('display_teacher'); 

Route::get('/edit-teacher/{id}', 'TeachersController@edit')->name('edit-teacher');

Route::post('/update-teacher/', 'TeachersController@update')->name('update_teacher');

Route::get('/delete-teacher/{id}', 'TeachersController@delete')->name('delete-teacher');

Route::get('/create-pta', function () {
    return view('create_pta');
});
Route::post('/save-pta', 'PtaController@store');

Route::get('/show-pta', 'PtaController@show')->name('pta.display');

Route::get('/individual-pta/{id}', 'PtaController@individual')->name('display_pta');

Route::get('/edit-pta/{id}', 'PtaController@edit')->name('edit_pta');

Route::post('/update-pta/', 'PtaController@update')->name('update_pta');

Route::get('/delete-pta/{id}', 'PtaController@delete')->name('delete-pta');

Route::get('/create-student', function () {
    return view('create_student');
});
Route::post('/save-student', 'StudentsController@store');

Route::get('/show-student', 'StudentsController@show')->name('s.display');

Route::get('/individual-student/{id}', 'StudentsController@individual')->name('display_student');

Route::get('/edit-student/{id}', 'StudentsController@edit')->name('edit_student');

Route::post('/update-student/', 'StudentsController@update')->name('update_student');

Route::get('/delete-student/{id}', 'StudentsController@delete')->name('delete-student');

Route::get('/symisadmin', function () {
    return view('symisadmin');
});

Route::get('/panel', 'PanelController@panelPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
