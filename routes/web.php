<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home')->name('home');

Route::resource('/subject', 'SubjectController');

Route::resource('/course', 'CourseController');

Route::resource('/tqf', 'TQFController')->only('index');

Route::resource('/tqf3', 'TQF3Controller')->only('create','store','edit','update','destroy','show');

Route::resource('/tqf5', 'TQF5Controller')->only('create','store','edit','update','destroy','show');

// Route::resource('/courseopen', 'CourseopenController')->only('index');

Route::resource('/subincourse', 'SICController');

Route::get('/tqf/tqf3/{tqf3}/copy','TQF3Controller@copy')->name('tqf3.copy');

Route::get('/tqf/tqf5/{tqf5}/copy','TQF5Controller@copy')->name('tqf5.copy');

Route::resource('/subava', 'SubavaController')->only('index');

// Route::get('/course/subincourse/{course}/add','SICController@add')->name('sic.add');

// Route::get('/products/details/{id}','ProductController@details');