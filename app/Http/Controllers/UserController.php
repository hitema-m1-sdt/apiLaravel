<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postUser(Request $request) {
       //header("Access-Control-Allow-Origin: *");
       User::create($request->all());
       return response()->json(array('success' => true, 'User_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllUser() {
     //header("Access-Control-Allow-Origin: *");
     $users = User::get();
     return response()->json($users);
   }
   public function getUser($user_id) {
     header("Access-Control-Allow-Origin: *");
     $user = User::find($user_id);
     return response()->json($user);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putUser(Request $request, $user_id) {
     //header("Access-Control-Allow-Origin: *");
     User::find($user_id)->update($request->all());
     return response()->json(array('success' => true, 'User_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteUser($user_id) {
    // header("Access-Control-Allow-Origin: *");
     $user = User::find($user_id)->delete();
     return response()->json(array('success' => true, 'User_deleted' => 1), 200);
   }
}
