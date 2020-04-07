<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
	public $table = "registrations";
    protected $fillable = [
        'name', 'email', 'phone', 'job', 'title', 'content'
    ];
}
