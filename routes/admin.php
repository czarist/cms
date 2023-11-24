<?php
use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@getIndex']);
Route::resource('category', 'CategoryController');
Route::resource('user', 'UserController');
Route::resource('skill', 'SkillController');
Route::resource('project', 'ProjectController');
Route::resource('certificate', 'CertificateController');
Route::resource('job', 'JobController');
Route::resource('education', 'EducationController');
