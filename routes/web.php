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

Route::get('/symisadmin', function () {
    return view('symisadmin');
});

Route::get('/students', function () {
    return view('students');
})->name('studi');

Route::get('/parents', function () {
    return view('parents');
})->name('mzae');

Route::get('/teachers', function () {
    return view('teachers');
})->name('mode');

Route::get('/principal', function () {
    return view('principal');
})->name('princi');

Route::get('/pta', function () {
    return view('pta');
})->name('pta');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('panel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
