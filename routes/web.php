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

Route::get('/create-guardian', function () {
    return view('create_guardian');
});
Route::post('/save-guardian', 'GuardianController@store');

Route::get('/create-teacher', function () {
    return view('create_teacher');
});
Route::post('/save-teacher', 'TeachersController@store');

Route::get('/create-pta', function () {
    return view('create_pta');
});
Route::post('/save-pta', 'PtaController@store');

Route::get('/create-student', function () {
    return view('create_student');
});
Route::post('/save-student', 'StudentsController@store');


Route::get('/symisadmin', function () {
    return view('symisadmin');
});

Route::get('/students', 'StudentsController@studentsPage');

Route::get('/parents', 'ParentsController@parentsPage');
    
Route::get('/teachers', 'TeachersController@teachersPage');

Route::get('/principal', 'PrincipalsController@principalsPage');

Route::get('/pta','PtaController@ptaPage');

Route::get('/panel', 'PanelController@panelPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
