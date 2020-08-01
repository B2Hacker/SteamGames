<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

// Admin.Games Route
Route::get('/admin/games', 'GamesController@Index');

Route::get('/admin/games/create', 'GamesController@Create');

Route::post('/admin/games/create', 'GamesController@Store');

Route::get('/admin/games/edit/{id}', 'GamesController@Edit');

Route::post('/admin/games/edit', 'GamesController@Update');

Route::get('/admin/games/delete/{id}', 'GamesController@Delete');

Route::delete('/admin/games/delete', 'GamesController@Remove');

Route::get('/admin/games/{id}', 'GamesController@Show');

// Admin.Description Route
Route::get('/admin/description', 'DescriptionController@Index');

Route::get('/admin/description/create', 'DescriptionController@Create');

Route::post('/admin/description/create', 'DescriptionController@Store');

Route::get('/admin/description/edit/{id}', 'DescriptionController@Edit');

Route::post('/admin/description/edit', 'DescriptionController@Update');

Route::get('/admin/description/delete/{id}', 'DescriptionController@Delete');

Route::delete('/admin/description/delete', 'DescriptionController@Remove');

Route::get('/admin/description/{id}', 'DescriptionController@Show');

// Admin.Requirements Route
Route::get('/admin/requirements', 'RequirementsController@Index');

Route::get('/admin/requirements/create', 'RequirementsController@Create');

Route::post('/admin/requirements/create', 'RequirementsController@Store');

Route::get('/admin/requirements/edit/{id}', 'RequirementsController@Edit');

Route::post('/admin/requirements/edit', 'RequirementsController@Update');

Route::get('/admin/requirements/delete/{id}', 'RequirementsController@Delete');

Route::delete('/admin/requirements/delete', 'RequirementsController@Remove');

Route::get('/admin/requirements/{id}', 'RequirementsController@Show');

// GamesStore Routes
Route::get('/games', 'GamesController@GamesStore')->name('GamesStore');

Route::get('/games/{id}', 'GamesController@GamesDetails')->name('GamesDetails');

Route::post('/games/comment', 'GamesController@AddComment')->name('GamesComment');

// DescriptionStore Routes

Route::get('/description', 'DescriptionController@DescriptionStore')->name('DescriptionStore');

Route::get('/description/{id}', 'DescriptionController@DescriptionDetails')->name('DescriptionDetails');

// RequirementsStore Routes

Route::get('/requirements', 'RequirementsController@RequirementsStore')->name('RequirementsStore');

Route::get('/requirements/{id}', 'RequirementsController@RequirementsDetails')->name('RequirementsDetails');



Route::get('/mongodb', function () {
    return view('mongodb');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
