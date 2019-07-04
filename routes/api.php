<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Key, Authorization");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");

Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');

// Route::group(['middleware' => 'jwt.auth'], function(){
//    // Route::get('/user', 'Auth\LoginController@user');
//
// });
// Route::group(['middleware' => 'jwt.refresh'], function(){
//     Route::get('/refresh', 'Auth\LoginController@refresh');
// });
//---------------------------------------------------------------------------
//                                  User
//---------------------------------------------------------------------------
Route::get('/user/getall', 'UserController@getAllUser')->name('getAllUser');
Route::get('/user/get/{id}', 'UserController@getUser')->name('getUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');
Route::get('/user/create', 'UserController@postUser')->name('postUser');
//---------------------------------------------------------------------------
//                                  Lesson
//---------------------------------------------------------------------------
Route::get('/lesson/getall', 'LessonController@getAllLesson')->name('getAllLesson');
Route::get('/lesson/get/{id}', 'LessonController@getLesson')->name('getLesson');
Route::get('/lesson/delete/{id}', 'LessonController@deleteLesson')->name('deleteLesson');
Route::post('/lesson/create', 'LessonController@postLesson')->name('postLesson');
Route::put('/lesson/update/{id}', 'LessonController@putLesson')->name('putLesson');
//---------------------------------------------------------------------------
//                                  User
//---------------------------------------------------------------------------
Route::get('/user/getall', 'UserController@getAllUser')->name('getAllUser');
Route::get('/user/get/{id}', 'UserController@getUser')->where('id', '[0-9]+')->name('getUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');

Route::get('/user/get/maitre', 'UserController@getMaitre')->name('getMaitre');
Route::get('/user/get/tireur', 'UserController@getTireur')->name('getTireur');
//---------------------------------------------------------------------------
//                               Tournament
//---------------------------------------------------------------------------
Route::get('/tournament/getall', 'TournamentController@getAllTournament')->name('getAllTournament');
Route::get('/tournament/get/{id}', 'TournamentController@getTournament')->name('getTournament');
Route::get('/tournament/delete/{id}', 'TournamentController@deleteTournament')->name('deleteTournament');
//---------------------------------------------------------------------------
//                               Categories
//---------------------------------------------------------------------------
Route::get('/category/getall', 'CategoriesController@getAllCategories')->name('getAllCategories');
Route::get('/category/get/{id}', 'CategoriesController@getCategories')->name('getCategories');
Route::get('/category/delete/{id}', 'CategoriesController@deleteCategories')->name('deleteCategories');
//---------------------------------------------------------------------------
//                               Training
//---------------------------------------------------------------------------
Route::get('/training/getall', 'TrainingController@getAllTraining')->name('getAllTraining');
Route::get('/training/get/{id}', 'TrainingController@getTraining')->name('getTraining');
Route::post('/training/delete/{id}', 'TrainingController@deleteTraining')->name('deleteTraining');
Route::post('/training/create', 'TrainingController@postTraining')->name('postTraining');
Route::get('/training/update/{id}', 'TrainingController@putTraining')->name('putTraining');
//---------------------------------------------------------------------------
//                               Objective
//---------------------------------------------------------------------------
Route::get('/objective/getall', 'ObjectiveController@getAllObjective')->name('getAllObjective');
Route::get('/objective/get/{id}', 'ObjectiveController@getObjective')->name('getObjective');
Route::get('/objective/delete/{id}', 'ObjectiveController@deleteObjective')->name('deleteObjective');
Route::post('/objective/create', 'ObjectiveController@postObjective')->name('postObjective');
//---------------------------------------------------------------------------
//                               Refere
//---------------------------------------------------------------------------
Route::get('/referees/getall', 'RefereController@getAllRefere')->name('getAllRefere');
Route::get('/referees/get/{id}', 'RefereController@getRefere')->name('getRefere');
Route::get('/referees/delete/{id}', 'RefereController@deleteRefere')->name('deleteRefere');
