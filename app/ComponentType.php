<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentType extends Model
{
   public function component(){
  	return $this->belongsTo('App\Component');
  }
}
