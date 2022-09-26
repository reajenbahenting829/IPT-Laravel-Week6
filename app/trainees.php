<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainees extends Model
{
   // use HasFactory;

    //trainees belongsTo user
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }

    //trainees belongsTo user
    public function courses()
    {
        return $this->belongsTo('App\Models\courses');
    }
}