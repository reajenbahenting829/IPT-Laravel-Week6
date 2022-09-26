<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class trainor extends Model
{
    //use HasFactory;

    //trainor belongsTo users
    public function user()
  {
     return $this->belongsTo('App\Model\users');
  }

  //trainor hasMany courses
  public function courses(){
    return $this->hasMany('App\Models\courses');
}

}