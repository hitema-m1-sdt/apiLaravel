<?php


namespace App\Http\Controllers;


use App\Models\Attendance;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function getAttendancesOfTheDay(Request $request, $idUser)
    {

        $attendances = Attendance::where(['idUser' => $idUser])->with(['training'  => function($q) {
        // Query the name field in status table
        $q->where(DB::raw('date(`date`)'), '=', DB::raw('curdate()')); // '=' is optional

        }])->get();



        return response()->json($attendances);
    }

}