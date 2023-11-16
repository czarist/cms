<?php
use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@getIndex']);
Route::resource('article', 'ArticleController');
Route::resource('category', 'CategoryController');
Route::resource('page', 'PageController');
Route::resource('user', 'UserController');
Route::resource('fruit', 'FruitController');
Route::resource('skill', 'SkillController');
