<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors extends Model
{
    protected $primaryKey = 'course_id';
    public $incrementing = false;
    
    protected $fillable = ['majors_id', 'name'];

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
