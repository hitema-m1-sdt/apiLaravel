<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class TournamentController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postTournament(Request $request) {
       header("Access-Control-Allow-Origin: *");
       Tournament::create($request->all());
       return response()->json(array('success' => true, 'Tournament_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllTournament() {
     header("Access-Control-Allow-Origin: *");
     $tournaments = Tournament::get();
     return response()->json($tournaments);
   }
   public function getTournament($tournament_id) {
     header("Access-Control-Allow-Origin: *");
     $tournament = Tournament::find($tournament_id);
     return response()->json($tournament);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putTournament(Request $request, $tournament_id) {
     header("Access-Control-Allow-Origin: *");
     Tournament::find($tournament_id)->update($request->all());
     return response()->json(array('success' => true, 'Tournament_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteTournament($tournament_id) {
     header("Access-Control-Allow-Origin: *");
     $tournament = Tournament::find($tournament_id)->delete();
     return response()->json(array('success' => true, 'Tournament_deleted' => 1), 200);
   }
}
