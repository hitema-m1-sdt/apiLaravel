<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
  protected $fillable = [
      'idShooter', 'objectiveName', 'knowledge	','comment',
  ];
}
