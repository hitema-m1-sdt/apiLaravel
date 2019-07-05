<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
  protected $fillable = [
      'idShooter', 'objectiveName', 'knowledge','comment',
  ];
  public function tireur()
  {
    return $this->belongsTo('App\Models\User', 'idShooter');
  }
  public function maitre()
  {
    return $this->belongsTo('App\Models\User', 'idCombatInstructor');
  }
}
