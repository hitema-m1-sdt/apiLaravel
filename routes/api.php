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

//---------------------------------------------------------------------------
//                                  Lesson
//---------------------------------------------------------------------------
Route::get('/lesson/getall', 'LessonController@getAllLesson')->name('getAllLesson');
Route::get('/lesson/get/{id}', 'LessonController@getLesson')->where('id', '[0-9]+')->name('getLesson');
Route::get('/lesson/delete/{id}', 'LessonController@deleteLesson')->name('deleteLesson');
Route::post('/lesson/create', 'LessonController@postLesson')->name('postLesson');
Route::put('/lesson/update/{id}', 'LessonController@putLesson')->name('putLesson');
//---------------------------------------------------------------------------
//                                  User
//---------------------------------------------------------------------------
Route::get('/user/getall', 'UserController@getAllUser')->name('getAllUser');
Route::get('/user/get/{id}', 'UserController@getUser')->where('id', '[0-9]+')->name('getUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');
Route::get('/user/create', 'UserController@postUser')->name('postUser');

Route::get('/user/get/maitre', 'UserController@getMaitre')->name('getMaitre');
Route::get('/user/get/tireur', 'UserController@getTireur')->name('getTireur');
//---------------------------------------------------------------------------
//                               Tournament
//---------------------------------------------------------------------------
Route::get('/tournament/getall', 'TournamentController@getAllTournament')->name('getAllTournament');
Route::get('/tournament/get/{id}', 'TournamentController@getTournament')->where('id', '[0-9]+')->name('getTournament');
Route::get('/tournament/delete/{id}', 'TournamentController@deleteTournament')->name('deleteTournament');
Route::post('/tournament/create', 'TournamentController@postTournament')->name('postTournament');
Route::put('/tournament/update/{id}', 'TournamentController@putTournament')->name('putTournament');
Route::get('/tournament/get/participant', 'TournamentController@getParticipant')->name('getParticipant');
//---------------------------------------------------------------------------
//                               Categories
//---------------------------------------------------------------------------
Route::get('/category/getall', 'CategoriesController@getAllCategories')->name('getAllCategories');
Route::get('/category/get/{id}', 'CategoriesController@getCategories')->where('id', '[0-9]+')->name('getCategories');
Route::get('/category/delete/{id}', 'CategoriesController@deleteCategories')->name('deleteCategories');
//---------------------------------------------------------------------------
//                               Training
//---------------------------------------------------------------------------
Route::get('/training/getall', 'TrainingController@getAllTraining')->name('getAllTraining');
Route::get('/training/get/{id}', 'TrainingController@getTraining')->where('id', '[0-9]+')->name('getTraining');
Route::post('/training/delete/{id}', 'TrainingController@deleteTraining')->name('deleteTraining');

Route::get('/training/today/{id}', 'TrainingController@getTrainingsOfTheDay')->name('getTrainingOfTheDay');
Route::get('/training/get/{id}', 'TrainingController@getTraining')->name('getTraining');
Route::get('/training/delete/{id}', 'TrainingController@deleteTraining')->name('deleteTraining');

Route::post('/training/create', 'TrainingController@postTraining')->name('postTraining');
Route::post('/training/update/{id}', 'TrainingController@putTraining')->name('putTraining');
//---------------------------------------------------------------------------
//                               Objective
//---------------------------------------------------------------------------
Route::get('/objective/getall', 'ObjectiveController@getAllObjective')->name('getAllObjective');
Route::get('/objective/get/{id}', 'ObjectiveController@getObjective')->where('id', '[0-9]+')->name('getObjective');
Route::get('/objective/delete/{id}', 'ObjectiveController@deleteObjective')->name('deleteObjective');
Route::post('/objective/create', 'ObjectiveController@postObjective')->name('postObjective');
Route::put('/objective/update/{id}', 'ObjectiveController@putObjective')->name('putObjective');
//---------------------------------------------------------------------------
//                               Referee
//---------------------------------------------------------------------------
Route::get('/referees/getall', 'RefereController@getAllRefere')->name('getAllRefere');
Route::get('/referees/get/{id}', 'RefereController@getRefere')->where('id', '[0-9]+')->name('getRefere');
Route::get('/referees/delete/{id}', 'RefereController@deleteRefere')->name('deleteRefere');

//---------------------------------------------------------------------------
//                               Attendances
//---------------------------------------------------------------------------
Route::post('/attendance/create', 'AttendanceController@createAttendance')->name('createAttendance');
