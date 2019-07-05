<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'idTraining', 'idUser',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'idUser');
    }
    public function training()
    {
        return $this->belongsTo('App\Models\Training', 'idTraining');
    }

}
