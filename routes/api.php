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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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
//                                  . . .
//---------------------------------------------------------------------------
