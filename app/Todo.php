<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
   function getNameAttribute($value){
       return ucwords($value);
   }
    function getSurnameAttribute($value)
    {
        return ucwords($value);
    }
}
