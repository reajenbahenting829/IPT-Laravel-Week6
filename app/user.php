<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
 //  use  HasFactory, Notifiable;
    
   //A user hasMany trainor
    public function trainor()
  {
     return $this->hasMany('App\Model\trainor');
  }

  //user hasMany trainees
  public function trainees()
{

   return $this->hasMany('App\Model\trainess');
}
}