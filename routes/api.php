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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getalllesson', 'LessonController@getAllLesson')->name('getAllLesson');
Route::get('/getlesson/{id}', 'LessonController@getLesson')->name('getLesson');
Route::get('/deletelesson/{id}', 'LessonController@deleteLesson')->name('deleteLesson');
