<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  protected $fillable = [
      'idCombatInstructor', 'idShooter', 'comment',
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
