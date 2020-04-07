<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $primaryKey = 'class_id';
    public $incrementing = false;
    protected $fillable = [
        'class_id', 'majors_id', 'name' , 'year', 
    ];

    public function majors()
    {
        return $this->belongsTo(Majors::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
