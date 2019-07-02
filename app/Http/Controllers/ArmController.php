<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arm;

class ArmController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postArm(Request $request) {
       header("Access-Control-Allow-Origin: *");
       Arm::create($request->all());
       return response()->json(array('success' => true, 'Arm_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllArm() {
     header("Access-Control-Allow-Origin: *");
     $arms = Arm::get();
     return response()->json($arms);
   }
   public function getArm($arm_id) {
     header("Access-Control-Allow-Origin: *");
     $arm = Arm::find($arm_id);
     return response()->json($arm);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putArm(Request $request, $arm_id) {
     header("Access-Control-Allow-Origin: *");
     Arm::find($arm_id)->update($request->all());
     return response()->json(array('success' => true, 'Arm_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteArm($arm_id) {
     header("Access-Control-Allow-Origin: *");
     $arm = Arm::find($arm_id)->delete();
     return response()->json(array('success' => true, 'Arm_deleted' => 1), 200);
   }
}
