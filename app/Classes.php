<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classes extends Model
{
    use SoftDeletes;

    function sub_class(){
        return $this->hasMany( SubClass::class, 'class_id');
    }
}
