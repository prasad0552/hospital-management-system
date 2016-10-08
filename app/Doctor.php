<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function specialist()
    {
    	return $this->belongsTo('App\Specialist');
    }
}
