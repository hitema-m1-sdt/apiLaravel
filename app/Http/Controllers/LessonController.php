<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
//---------------------------------------------------------------------------
//                                  Create
//---------------------------------------------------------------------------
   public function postLesson(Request $request) {
     header("Access-Control-Allow-Origin: *");
     //dd($request->only('idShooter'));
     Lesson::create($request->all());
     return response()->json(array('success' => true, 'lesson_created' => 1), 200);
   }
//---------------------------------------------------------------------------
//                                  Read
//---------------------------------------------------------------------------
 public function getAllLesson() {
   header("Access-Control-Allow-Origin: *");
   $lessons = Lesson::get();
   return response()->json($lessons);
 }
 public function getLesson($lesson_id) {
   header("Access-Control-Allow-Origin: *");
   $lesson = Lesson::find($lesson_id);
   return response()->json($lesson);
 }
 //---------------------------------------------------------------------------
 //                                  Update
 //---------------------------------------------------------------------------
 public function putLesson(Request $request, $lesson_id) {
   header("Access-Control-Allow-Origin: *");
   Lesson::find($lesson_id)->update($request->all());
   return response()->json(array('success' => true, 'lesson_created' => 1), 200);
 }
 //---------------------------------------------------------------------------
 //                                  Delete
 //---------------------------------------------------------------------------
 public function deleteLesson($lesson_id) {
   header("Access-Control-Allow-Origin: *");
   $lesson = Lesson::find($lesson_id)->delete();
   return response()->json(array('success' => true, 'lesson_deleted' => 1), 200);
 }
}
