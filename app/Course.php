<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';
    public $incrementing = false;
    
    protected $fillable = ['course_id', 'name','price'];
    
    public function section()
    {
        return $this->hasMany(Section::class);
    }
    
}
