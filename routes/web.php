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

Route::get('/', 'HomeController@index')->name('home');

Route::get('profile/{id}', 'UsersController@profile');

Route::post('/follow/{id}', 'ConnectionsController@followUser');
Route::post('/unfollow/{id}', 'ConnectionsController@unfollowUser');

Route::get('users', 'UsersController@show');
Route::get('categories', 'CategoriesController@show');

Route::get('results/{user_id}/{category_id}', 'LessonsController@showResults');
Route::get('lesson/{id}', 'LessonsController@startQuiz');
Route::post('lesson/create', 'LessonsController@create');

Route::get('learnedwords/{id}', 'LearnedWordsController@index');
Route::get('learnedLessons/{id}', 'LessonsController@index');

Route::get('edit/profile', 'UsersController@edit');
Route::post('edit/profile', 'UsersController@update');


Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::get('/admin/category', 'DataManagementController@index');
	Route::get('/admin/category/create', 'DataManagementController@createCategory');
	Route::post('/admin/category/create', 'CategoriesController@store');
	Route::get('/admin/category/{id}', 'DataManagementController@displayItems');
	Route::get('/admin/category/{id}/edit', 'DataManagementController@editCategory');
	Route::post('/admin/category/{id}/edit', 'CategoriesController@edit');
	Route::get('/admin/category/{id}/delete', 'CategoriesController@destroy');

	Route::get('/admin/category/{id}/item/create', 'DataManagementController@createItem');
	Route::post('/admin/category/{id}/item/create', 'ItemsController@store');
	Route::get('/admin/item/{id}/edit', 'DataManagementController@editItem');
	Route::post('/admin/item/{id}/edit', 'ItemsController@edit');
	Route::get('/admin/item/{id}/delete', 'ItemsController@destroy');

	Route::get('/admin/item/{id}', 'DataManagementController@displayOptions');
	Route::get('/admin/item/{id}/option/create', 'DataManagementController@createOption');
	Route::post('/admin/item/{id}/option/create', 'OptionsController@store');
	Route::get('/admin/option/{id}/edit', 'DataManagementController@editOption');
	Route::post('/admin/option/{id}/edit', 'OptionsController@edit');
	Route::get('/admin/option/{id}/delete', 'OptionsController@destroy');

	Route::get('/admin/category/{id}/toggleStatus', 'CategoriesController@toggleStatus');
});

