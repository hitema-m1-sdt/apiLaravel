<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  protected $fillable = [
      'startDate', 'endDate',
  ];
}
