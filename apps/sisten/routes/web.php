<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CourseController;

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

Route::get('/', 'App\Http\Controllers\VacancyController@index');

Route::get('/vacancy', 'App\Http\Controllers\VacancyController@index');

Route::get('/chart', 'App\Http\Controllers\ChartController@index');

Route::get('/login', 'App\Http\Controllers\AuthenticationController@index')->name('login');

Route::post('/login', 'App\Http\Controllers\AuthenticationController@login');
Route::post('/register', 'App\Http\Controllers\AuthenticationController@register');

Route::get('/event', 'App\Http\Controllers\EventController@index');

Route::group(['middleware' => 'AuthenticationMiddleware'], function () {
    /*Logout*/
    Route::get('/logout', 'App\Http\Controllers\AuthenticationController@logout');

    /*Dashboard*/
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');

    /*Profile*/
    Route::get('/profile/{registration_number}', 'App\Http\Controllers\AuthenticationController@profile');
    Route::get('/profile/setting/{registration_number}', 'App\Http\Controllers\AuthenticationController@profilesetting');
    Route::post('/profile/setting/{registration_number}', 'App\Http\Controllers\AuthenticationController@profileupdate');

    /*Announcement*/
    Route::get('/announcement', 'App\Http\Controllers\AnnouncementController@show');

    /*Vacancy*/

    Route::group(['middleware' => 'AdminRoleMiddleware'], function () {
        /*Schedule*/
        Route::get('/schedules/show', 'App\Http\Controllers\ScheduleController@show');
        Route::get('getInitial', [ScheduleController::class, 'getInitial'])->name('getInitial');
        Route::post('/schedules/create', 'App\Http\Controllers\ScheduleController@create');
        Route::get('/schedules/{id}/edit', 'App\Http\Controllers\ScheduleController@edit');
        Route::post('/schedules/{id}/update', 'App\Http\Controllers\ScheduleController@update');
        Route::get('/schedules/{id}/delete', 'App\Http\Controllers\ScheduleController@delete');

        /*User Log Activity*/
        Route::get('/logactivities', 'App\http\Controllers\UserLogActivityController@index');
        Route::get('/logactivities/export/xls', 'App\Http\Controllers\UserLogActivityController@exportExcel');
        Route::get('/logactivities/export/pdf', 'App\Http\Controllers\UserLogActivityController@exportPdf');
        Route::get('/logactivities/{id}/delete', 'App\Http\Controllers\UserLogActivityController@delete');

        /*User Management*/
        Route::get('/users/{id}/edit', 'App\Http\Controllers\UserManagementController@edit');
        Route::post('/users/{id}/update', 'App\Http\Controllers\UserManagementController@update');
        Route::get('users', ['uses' => 'App\Http\Controllers\UserManagementController@index', 'as' => 'users.index']);

        // Course Owner
        Route::get('/courseowner', 'App\Http\Controllers\CourseOwnerController@index');
        Route::get('/courseowner/add', 'App\Http\Controllers\CourseOwnerController@add');
        Route::post('/courseowner/create', 'App\Http\Controllers\CourseOwnerController@create');
        Route::get('/courseowner/{id}/edit', 'App\Http\Controllers\CourseOwnerController@edit');
        Route::post('/courseowner/{id}/update', 'App\Http\Controllers\CourseOwnerController@update');
        Route::get('/courseowner/{id}/delete', 'App\Http\Controllers\CourseOwnerController@delete');

        // Semester
        Route::get('/semesters', 'App\Http\Controllers\SemesterController@index');
        Route::get('/semesters/{id}/edit', 'App\Http\Controllers\SemesterController@edit');
        Route::post('/semesters/{id}/update', 'App\Http\Controllers\SemesterController@update');
        Route::get('/semesters/{id}/delete', 'App\Http\Controllers\SemesterController@delete');

        // Course
        Route::get('/courses/add', 'App\Http\Controllers\CourseController@add');
        Route::post('/courses/create', 'App\Http\Controllers\CourseController@create');
        Route::get('/courses/{id}/edit', 'App\Http\Controllers\CourseController@edit');
        Route::post('/courses/{id}/update', 'App\Http\Controllers\CourseController@update');
        Route::get('/courses/{id}/delete', 'App\Http\Controllers\CourseController@delete');
        Route::get('/courses/export/xls', 'App\Http\Controllers\CourseController@exportExcel');
        Route::get('/courses/export/pdf', 'App\Http\Controllers\CourseController@exportPdf');
        Route::get('/courses/{id}/show', 'App\Http\Controllers\CourseController@show');
        Route::post('/courses/{id}/create_semester', 'App\Http\Controllers\CourseController@create_semester');
    });

    Route::group(['middleware' => 'LecturerRoleMiddleware'], function () {
        /*Vacancy Management*/
        Route::get('/vacancy/create/{id}', 'App\Http\Controllers\VacancyController@create');
        Route::post('/vacancy/create/{id}', 'App\Http\Controllers\VacancyController@store');
        Route::get('/vacancymanagement/{id}/edit', 'App\Http\Controllers\VacancyController@edit');
        Route::post('/vacancymanagement/{id}/update', 'App\Http\Controllers\VacancyController@update');
        Route::get('/vacancymanagement/{id}/delete', 'App\Http\Controllers\VacancyController@delete');

        //Application Report/
        Route::get('/applicationreport/{id}/approve', 'App\Http\Controllers\ApplicationController@approve');
        Route::get('/applicationreport/{id}/detail', 'App\Http\Controllers\ApplicationController@detail');
    });

    Route::group(['middleware' => 'AdminLecturerRoleMiddleware'], function () {
        /*Course*/
        Route::get('/courses/{id}', 'App\Http\Controllers\CourseController@detail');

        /*Course*/
        Route::get('/courses', 'App\Http\Controllers\CourseController@index');
        Route::post('/courses', 'App\Http\Controllers\CourseController@indexall');

        /*Vacancy Management*/
        Route::get('/vacancymanagement', 'App\Http\Controllers\VacancyController@indexmanagement');
        Route::get('/vacancymanagement/{id}/detail', 'App\Http\Controllers\VacancyController@detail');

        /*Application Report*/
        Route::get('/applicationreport', 'App\Http\Controllers\ApplicationController@index');
    });

    Route::group(['middleware' => 'AdminLecturerTARoleMiddleware'], function () {
        /*Schedule*/
        Route::get('/schedules', 'App\Http\Controllers\ScheduleController@index');
        Route::get('/schedules/export/xls', 'App\Http\Controllers\ScheduleController@exportExcel');
        Route::get('/schedules/export/pdf', 'App\Http\Controllers\ScheduleController@exportPdf');

        //Activity Report//
        Route::get('/logactivity', 'App\Http\Controllers\LogActivityController@index');
        Route::get('/logactivity/{id}/detail', 'App\Http\Controllers\LogActivityController@detail');
        Route::get('/logactivity/{id}/approve', 'App\Http\Controllers\LogActivityController@approve');
        Route::post('/logactivity/{id}/detail', 'App\Http\Controllers\LogActivityController@comment');
    });

    Route::group(['middleware' => 'AdminTARoleMiddleware'], function () {
        /*TA Report*/
        Route::get('/tareport', 'App\Http\Controllers\TareportController@index');
    });

    Route::group(['middleware' => 'TARoleMiddleware'], function () {
        //TA Report/
        Route::get('/tareport/{id}/create', 'App\Http\Controllers\TAReportController@showcreate');
        Route::post('/tareport/{id}/send', 'App\Http\Controllers\TAReportController@create');
    });

    Route::group(['middleware' => 'TAStudentRoleMiddleware'], function () {
        /*Vacancy*/
        Route::get('/vacancy/{id}/apply', 'App\Http\Controllers\VacancyController@showapply');
        Route::post('/vacancy/{id}/apply', 'App\Http\Controllers\VacancyController@apply');

        /*Announcement*/
        Route::get('/announcement/{id}/detail', 'App\Http\Controllers\AnnouncementController@detail');
    });
});
