<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = 'subject_id';
    
    public $incrementing = false;

    protected $fillable = [
        'subject_id' , 'name'
    ];

    public function subjectClasses() {
        return $this->hasMany(SubjectClass::class);
    }
}
