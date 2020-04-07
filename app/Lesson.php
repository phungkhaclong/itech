<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'section_id','name', 'url'
    ];

    public function sections()
    {
        return $this->belongsTo(Section::class);
    }
}
