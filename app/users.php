<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
 //  use  HasFactory, Notifiable;
    
   //A user hasMany trainor
    public function trainor()
  {
     return $this->hasMany('App\Model\trainor');
  }

  //user hasMany trainees
  public function trainess()
{

   return $this->hasMany('App\Model\trainess');
}
}