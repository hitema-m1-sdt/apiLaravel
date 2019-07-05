<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objective;

class ObjectiveController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postObjective(Request $request) {
       Objective::create($request->all());
       return response()->json(array('success' => true, 'Objective_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllObjective() {
     $objectives = Objective::get();
     return response()->json($objectives);
   }
   public function getObjective($objective_id) {
     $objective = Objective::find($objective_id);
     return response()->json($objective);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putObjective(Request $request, $objective_id) {
     Objective::find($objective_id)->update($request->all());
     return response()->json(array('success' => true, 'Objective_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteObjective($objective_id) {
     $objective = Objective::find($objective_id)->delete();
     return response()->json(array('success' => true, 'Objective_deleted' => 1), 200);
   }
}
