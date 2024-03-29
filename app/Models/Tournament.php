<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
  protected $fillable = [
      'categories', 'name', 'localisation', 'date', 'hour', 'arm', 'gender', 'level'
  ];

  public function participants()
  {
    return $this->belongsToMany('App\Models\User', 'participantsTournaments', 'idCompetition', 'idUser');

  }

}
