<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    public $table = 'softwares';
    protected $fillable = ['name', 'url'];
}
