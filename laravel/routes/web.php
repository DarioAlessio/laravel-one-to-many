<?php

// emp
Route::get('/', 'MainController@employeeIndex')->name('employee-index');

Route::get('/employee/{id}', 'MainController@employeeShow')->name('employee-show');

// task-> p
// Route::get('/new/task', 'MainController@taskIndex')->name('newtask-index');
//
// Route::get('/new/task/create', 'MainController@taskCreate')->name('newtask-create');
//
// Route::post('/new/task/store', 'MainController@taskStore')->name('newtask-store');
//
// Route::get('/new/task/edit/{id}', 'MainController@taskEdit')->name('newtask-edit');
//
// Route::post('/new/task/update/{id}', 'MainController@taskUpdate')-> name('newtask-update');
//
// Route::get('/new/task/delete/{id}', 'MainController@taskDelete')-> name('newtask-delete');

//location
Route::get('/location', 'MainController@locationIndex')-> name('location-index');

Route::get('/location/{id}', 'MainController@locationShow')->name('location-show');

// TASK
Route::get('/tasks', 'TaskController@index')
    -> name('task-index');
Route::get('/task/create', 'TaskController@create')
    -> name('task-create');
Route::post('/task/store', 'TaskController@store')
    -> name('task-store');
Route::get('/task/edit/{id}', 'TaskController@edit')
    -> name('task-edit');
Route::post('/task/update/{id}', 'TaskController@update')
    -> name('task-update');
Route::get('/task/{id}', 'TaskController@show')
    -> name('task-show');


//typology
Route::get('/typology', 'TypologyController@Index')->name('typology-index');

Route::get('/typology/create', 'TypologyController@create')-> name('typology-create');

Route::post('/typology/store', 'TypologyController@store')-> name('typology-store');

Route::get('/typology/edit/{id}', 'TypologyController@edit')-> name('typology-edit');

Route::post('/typology/update/{id}', 'TypologyController@update')-> name('typology-update');

Route::get('/typology/{id}', 'TypologyController@show')-> name('typology-show');
