<?php

// emp
Route::get('/', 'MainController@employeeIndex')->name('employee-index');

Route::get('/employee/{id}', 'MainController@employeeShow')->name('employee-show');

// task
Route::get('/task', 'MainController@taskIndex')->name('task-index');

Route::get('/task/create', 'MainController@taskCreate')->name('task-create');

Route::post('/task/store', 'MainController@taskStore')->name('task-store');

Route::get('/task/edit/{id}', 'MainController@taskEdit')->name('task-edit');
