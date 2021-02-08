<?php

// emp
Route::get('/', 'MainController@employeeIndex')->name('employee-index');

Route::get('/employee/{id}', 'MainController@employeeShow')->name('employee-show');

// // task
// Route::get('/task', 'MainController@taskIndex')->name('task-index');
//
// Route::get('/task/create', 'MainController@taskCreate')->name('task-create');
//
// Route::post('/task/store', 'MainController@taskStore')->name('task-store');
//
// Route::get('/task/edit/{id}', 'MainController@taskEdit')->name('task-edit');
//
// Route::post('/task/update/{id}', 'MainController@taskUpdate')-> name('task-update');
//
// Route::get('/task/delete/{id}', 'MainController@taskDelete')-> name('task-delete');
//
// //location
// Route::get('/location', 'MainController@locationIndex')-> name('location-index');
//
// Route::get('/location/{id}', 'MainController@locationShow')->name('location-show');


//typology
Route::get('/typology', 'MainController@typologyIndex')->name('typology-index');



// TASK + esempio
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
