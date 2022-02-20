<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubClass extends Model
{
    use SoftDeletes;

    function classname(){
        return $this->belongsTo( Classes::class, 'class_id');
    }
}
