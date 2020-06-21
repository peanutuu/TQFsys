<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'HomeController')->only('index');

Auth::routes();
Route::middleware(['auth'])->group(function(){

    Route::resource('/subject', 'SubjectController');
    Route::resource('/course', 'CourseController');
    Route::resource('/tqf3', 'TQF3Controller')->only('index','create','store','edit','update','destroy','show');   
    Route::get('/tqf3/{tqf3}/copy','TQF3Controller@copy')->name('tqf3.copy');
    Route::get('/tqf3/{tqf3}/create2', 'TQF3Controller@create2')->name('tqf3.create2');
    Route::get('/tqf3/pdf/{tqf3}', 'TQF3Controller@downloadPDF')->name('tqf3.pdf');
    Route::put('/tqf3/{tqf3}','TQF3Controller@update2')->name('tqf3.update2');
    Route::get('/tqf3/{tqf3}/edit2', 'TQF3Controller@edit2')->name('tqf3.edit2');

    Route::resource('/tqf5', 'TQF5Controller')->only('index','create','store','edit','update','destroy','show');    
    Route::get('/tqf5/{tqf5}/copy','TQF5Controller@copy')->name('tqf5.copy');

});

Route::middleware(['auth','admin'])->group(function(){

    Route::resource('/subincourse', 'SICController');
    Route::get('/users','UserController@index')->name('users.index');
    Route::post('/users/{user}/makeadmin','UserController@makeadmin')->name('user.makeadmin');

});

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/', 'HomeController')->only('index');

// Route::resource('/subject', 'SubjectController');

// Route::resource('/course', 'CourseController');

// Route::resource('/tqf', 'TQFController')->only('index');

// Route::resource('/tqf3', 'TQF3Controller')->only('index','create','store','edit','update','destroy','show');

// Route::resource('/tqf5', 'TQF5Controller')->only('index','create','store','edit','update','destroy','show');

// Route::resource('/courseopen', 'CourseopenController')->only('index');

// Route::resource('/subincourse', 'SICController');

// Route::get('/tqf3/{tqf3}/copy','TQF3Controller@copy')->name('tqf3.copy');

// Route::get('/tqf5/{tqf5}/copy','TQF5Controller@copy')->name('tqf5.copy');

// Route::resource('/subava', 'SubavaController')->only('index');

// Route::get('/tqf/tqf3/select', 'TQF3Controller@select')->name('tqf3.select');

// Route::get('/tqf3/{tqf3}/create2', 'TQF3Controller@create2')->name('tqf3.create2');

// Route::get('/tqf3/pdf/{tqf3}', 'TQF3Controller@downloadPDF')->name('tqf3.pdf');

// Route::get('/tqf/tqf3/{tqf3}/create2', 'TQF3Controller@storeTwo')->name('tqf3.storeTwo');

// Route::get('/course/subincourse/{course}/add','SICController@add')->name('sic.add');

// Route::get('/products/details/{id}','ProductController@details');

// Route::get('/subject/search','SubjectController@search')->name('subject.index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
