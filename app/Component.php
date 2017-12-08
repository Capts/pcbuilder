<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public function component_type(){
        return $this
        ->hasOne('App\ComponentType');
    }
}
