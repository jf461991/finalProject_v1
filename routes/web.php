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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('periods', 'PeriodController');

Route::resource('levels', 'LevelController');

Route::resource('subjects', 'SubjectController');

Route::resource('roles', 'RolController');

Route::resource('users', 'UserController');

Route::resource('students', 'StudentController');

Route::resource('teachers', 'TeacherController');

Route::resource('administratives', 'AdministrativeController');

Route::resource('levels_subjects', 'LevelSubjectController');

Route::resource('enrolments', 'EnrolmentController');
