<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postTraining(Request $request) {
       header("Access-Control-Allow-Origin: *");
       Training::create($request->all());
       return response()->json(array('success' => true, 'Training_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllTraining() {
     header("Access-Control-Allow-Origin: *");
     $trainings = Training::get();
     return response()->json($trainings);
   }
   public function getTraining($training_id) {
     header("Access-Control-Allow-Origin: *");
     $training = Training::find($training_id);
     return response()->json($training);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putTraining(Request $request, $training_id) {
     header("Access-Control-Allow-Origin: *");
     Training::find($training_id)->update($request->all());
     return response()->json(array('success' => true, 'Training_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteTraining($training_id) {
     header("Access-Control-Allow-Origin: *");
     $training = Training::find($training_id)->delete();
     return response()->json(array('success' => true, 'Training_deleted' => 1), 200);
   }
}
