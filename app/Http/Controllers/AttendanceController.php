<?php


namespace App\Http\Controllers;


use App\Models\Attendance;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
   public function createAttendance(Request $request){


       Attendance::create(['idUser' => $request->get('user'), 'idTraining' => $request->get('training')]);

       return response()->json(
           array('success' => true, 'Objective_created' => 1)
           , 200);
   }

}
