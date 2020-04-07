<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectClass extends Model
{

  protected $fillable = [
      'class_id', 'subject_id'
  ];

  public function subjects() {
      return $this->belongsTo(Subject::class);
  }
}
