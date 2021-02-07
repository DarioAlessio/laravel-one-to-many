<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
       'name',
       'lastName',
       'date_of_birth',
   ];
   public function tasks(){
         return $this->hasMany('App\Task');
   }
   public function locations(){
         return $this->belongsToMany('App\Location');
   }
}
