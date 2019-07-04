<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefereController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postRefere(Request $request) {
       header("Access-Control-Allow-Origin: *");
       Refere::create($request->all());
       return response()->json(array('success' => true, 'Refere_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllRefere() {
     header("Access-Control-Allow-Origin: *");
     $referes = Refere::get();
     return response()->json($referes);
   }
   public function getRefere($refere_id) {
     header("Access-Control-Allow-Origin: *");
     $refere = Refere::find($refere_id);
     return response()->json($refere);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putRefere(Request $request, $refere_id) {
     header("Access-Control-Allow-Origin: *");
     Refere::find($refere_id)->update($request->all());
     return response()->json(array('success' => true, 'Refere_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteRefere($refere_id) {
     header("Access-Control-Allow-Origin: *");
     $refere = Refere::find($refere_id)->delete();
     return response()->json(array('success' => true, 'Refere_deleted' => 1), 200);
   }
}
