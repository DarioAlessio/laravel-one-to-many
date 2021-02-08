<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = [
       'name',
       'type',
   ];

   public function tasks(){
     return $this -> belongsToMany('App\Task');
   }
}
