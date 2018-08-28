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


Route::group(['middleware' => ['auth', 'admin']], function() {
	Route::get('/admin', 'DataManagementController@index');
});