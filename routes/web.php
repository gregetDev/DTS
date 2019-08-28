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

// Pages
Route::get('/', 'PageController@home');
Route::get('/admin', 'SigninController@form')->name('signin.form');
Route::post('attempt', 'SigninController@attempt')->name('signin.attempt');
Route::get('logout', 'SigninController@logout')->name('logout');
Route::get('/dashboard', 'PageController@dashboard');
Route::get('/about', 'PageController@about');
Route::get('/pelatihanMl', 'PageController@pelatihanMl');
Route::get('/pelatihanCc', 'PageController@pelatihanCc');
Route::get('/jadwal', 'PageController@jadwal');
Route::get('/speakers', 'PageController@speakers');
Route::get('/daftarpeserta', 'PageController@daftarpeserta');
Route::get('/hakewa', 'PageController@hakewa');
Route::get('/tata', 'PageController@tata');
Route::get('/silabus', 'PageController@silabus');
Route::get('/news', 'PageController@newss');
Route::get('/contact', 'PageController@contact');
Route::get('/galery', 'UploadController@index');
Route::get('/news/{articles}', 'PageController@news');
Route::get('/daftar', 'PageController@daftar'); 


//peserta
Route::get('/peserta', 'ParticipantController@index');
Route::get('/peserta/create', 'ParticipantController@create');
Route::get('/peserta/detail/{participant}', 'ParticipantController@detail');
Route::get('/peserta/destroy/{peserta}', 'ParticipantController@destroy');

Route::get('/peserta/update/{participant}', 'ParticipantController@update');
Route::post('/peserta', 'ParticipantController@store');

//Artikel
Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/search', 'ArticleController@search');
Route::get('/artikel/create', 'ArticleController@create');
Route::get('/artikel/edit/{article}', 'ArticleController@edit');
Route::get('/artikel/destroy/{article}', 'ArticleController@destroy');

Route::post('/artikel/update/{article}', 'ArticleController@update');
Route::post('/artikel', 'ArticleController@store');

//Instructor
Route::get('/instruktur', 'InstructorController@index');
Route::get('/instruktur/create', 'InstructorController@create');
Route::get('/instruktur/edit/{instructor}', 'InstructorController@edit');
Route::get('/instruktur/destroy/{instructor}', 'InstructorController@destroy');

Route::post('/instruktur/update/{instructor}', 'InstructorController@update');
Route::post('/instruktur', 'InstructorController@store');

//Galery
Route::get('drag-drop-images', 'UploadController@create');
Route::get('galery/destroy', 'UploadController@destroy');
Route::get('galery/delete', 'UploadController@delete');
Route::post('drag-drop-images', 'UploadController@store');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
