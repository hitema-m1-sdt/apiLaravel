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
//---------------------------------------------------------------------------
//                                  Lesson
//---------------------------------------------------------------------------
Route::get('/lesson/getall', 'LessonController@getAllLesson')->name('getAllLesson');
Route::get('/lesson/get/{id}', 'LessonController@getLesson')->name('getLesson');
Route::get('/lesson/delete/{id}', 'LessonController@deleteLesson')->name('deleteLesson');
//---------------------------------------------------------------------------
//                                  Arm
//---------------------------------------------------------------------------
Route::get('/arm/getall', 'ArmController@getAllArm')->name('getAllArm');
Route::get('/arm/get/{id}', 'ArmController@getArm')->name('getArm');
Route::get('/arm/delete/{id}', 'ArmController@deleteArm')->name('deleteArm');
//---------------------------------------------------------------------------
//                                  . . .
//---------------------------------------------------------------------------
