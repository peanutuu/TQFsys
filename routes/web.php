<?php

use Illuminate\Support\Facades\Route;

Route::resource('/', 'HomeController')->only('index');

// Route::resource('/subject', 'SubjectController');
// Route::resource('/course', 'CourseController');
// Route::resource('/tqf3', 'TQF3Controller')->only('index','create','store','edit','update','destroy','show');  
// Route::get('/tqf3/{tqf3}/create2', 'TQF3Controller@create2')->name('tqf3.create2');

// Route::get('dynamic-field', 'DynamicFieldController@index');
// Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');

Auth::routes();
Route::middleware(['auth'])->group(function(){

    Route::resource('/subject', 'SubjectController');
    Route::resource('/course', 'CourseController');
    Route::resource('/tqf3', 'TQF3Controller')->only('index','create','store','edit','update','destroy','show');   
    Route::get('/tqf3/{tqf3}/copy','TQF3Controller@copy')->name('tqf3.copy');

    Route::get('/tqf3/{tqf3}/create1', 'TQF3Controller@create1')->name('tqf3.create1');
    Route::get('/tqf3/{tqf3}/create2', 'TQF3Controller@create2')->name('tqf3.create2');
    Route::get('/tqf3/{tqf3}/create3', 'TQF3Controller@create3')->name('tqf3.create3');
    Route::get('/tqf3/{tqf3}/create4', 'TQF3Controller@create4')->name('tqf3.create4');
    Route::get('/tqf3/{tqf3}/create5', 'TQF3Controller@create5')->name('tqf3.create5');
    Route::get('/tqf3/{tqf3}/create6', 'TQF3Controller@create6')->name('tqf3.create6');
    Route::get('/tqf3/{tqf3}/create7', 'TQF3Controller@create7')->name('tqf3.create7');

    Route::get('/tqf3/{tqf3}/lessonplan', 'DynamicFieldController@index')->name('tqf3.lessonplan');
    Route::post('/tqf351/insert', 'DynamicFieldController@insert')->name('lessonplan.insert');

    Route::get('/tqf3/{tqf3}/createtqf352', 'Dynamic2FieldController@index')->name('tqf3.createtqf352');
    Route::post('/tqf352/insert', 'Dynamic2FieldController@insert')->name('createtqf352.insert');

    // Route::put('/tqf3/update', 'DynamicFieldController@update')->name('tqf3.updatelessonplan');

    // Route::post('/tqf3/{tqf3}/lessonplan/insert', 'DynamicFieldController@insert')->name('lessonplan.insert');

    Route::put('/tqf3/1/{tqf3}','TQF3Controller@update1')->name('tqf3.update1');
    Route::put('/tqf3/2/{tqf3}','TQF3Controller@update2')->name('tqf3.update2');
    Route::put('/tqf3/3/{tqf3}','TQF3Controller@update3')->name('tqf3.update3');
    Route::put('/tqf3/4/{tqf3}','TQF3Controller@update4')->name('tqf3.update4');
    Route::put('/tqf3/5/{tqf3}','TQF3Controller@update5')->name('tqf3.update5');
    Route::put('/tqf3/6/{tqf3}','TQF3Controller@update6')->name('tqf3.update6');
    Route::put('/tqf3/7/{tqf3}','TQF3Controller@update7')->name('tqf3.update7');

    Route::get('/tqf3/pdf/{tqf3}', 'TQF3Controller@downloadPDF')->name('tqf3.pdf');
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
