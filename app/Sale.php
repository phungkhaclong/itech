<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $fillable = [
    'course_id', 'price', 'from_date','to_date'
  ];
}
