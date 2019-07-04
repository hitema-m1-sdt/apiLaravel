<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  protected $fillable = [
      'date', 'type',
  ];

  public $timestamps = false;
}
