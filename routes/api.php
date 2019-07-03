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
("Access-Control-Allow-Origin: *");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'Auth\LoginController@user');
        Route::post('logout', 'Auth\LoginController@logout');
    });

Route::get('/login', 'Auth\LoginController@login')->name('login');

//---------------------------------------------------------------------------
//                                  Lesson
//---------------------------------------------------------------------------
Route::get('/lesson/getall', 'LessonController@getAllLesson')->name('getAllLesson');
Route::get('/lesson/get/{id}', 'LessonController@getLesson')->name('getLesson');
Route::get('/lesson/delete/{id}', 'LessonController@deleteLesson')->name('deleteLesson');
//---------------------------------------------------------------------------
//                                  User
//---------------------------------------------------------------------------
Route::get('/user/getall', 'UserController@getAllUser')->name('getAllUser');
Route::get('/user/get/{id}', 'UserController@getUser')->name('getUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser')->name('deleteUser');
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
Route::get('/training/delete/{id}', 'TrainingController@deleteTraining')->name('deleteTraining');
