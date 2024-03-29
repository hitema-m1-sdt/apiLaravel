<?php

namespace App\Http\Controllers;

use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Training;
use Illuminate\Support\Facades\DB;

class TrainingController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postTraining(Request $request) {

         $period = new DatePeriod(
             new DateTime($request->get('startDate')),
             new DateInterval('P1D'),
             new DateTime($request->get('endDate'))
         );

         /**
          * @var  $key
          * @var DateTime $value
          */
         foreach ($period as $key => $value) {
             if (in_array( $value->format('D'), $request->get('days'))) {

                 $hour = intval(substr($request->get('time'), 0, 2));
                 $minutes = intval(substr($request->get('time'), 3, 2));
                 $value->setTime($hour,$minutes);
                 Training::create(['date' =>  $value, 'type' => $request->get('type')]);


             }

         }





         return response()->json(array('success' => true, 200, 'time' => $request->get('time')));
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllTraining() {
     $trainings = Training::orderBy('date')->get();
     return response()->json($trainings);
   }
   public function getTraining($training_id) {
     $training = Training::find($training_id);
     return response()->json($training);
   }


   public function getTrainingsOfTheDay($idUser)
   {

       $trainings = Training::where(DB::raw('date(`date`)'), '=', DB::raw('curdate()'))
           ->with(['attendances' =>  function($q) use($idUser)  {
               $q->where('idUser', '=', $idUser);
            }])
           ->orderBy('date')
           ->get();

       return response()->json($trainings);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putTraining(Request $request, $training_id) {

         $date = new DateTime($request->get('date'));
         $hour = intval(substr($request->get('time'), 0, 2));
         $minutes = intval(substr($request->get('time'), 3, 2));
         $date->setTime($hour,$minutes);

         $type = $request->get('type');

         Training::find($training_id)->update(['type' => $type, 'date' => $date]);

       return response()->json(array('success' => true, 'Training_updated' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteTraining($training_id) {
     $training = Training::find($training_id)->delete();
     return response()->json(array('success' => true, 'Training_deleted' => 1), 200);
   }
}
