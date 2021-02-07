<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
      protected $fillable = [
         'name',
         'value',

     ];
     public function employees(){
           return $this->belongsToMany('App\Employee');
     }
}
