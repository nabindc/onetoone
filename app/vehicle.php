<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    protected $fillable = [
    	'name','brand','description',
    ];


    public function car(){
    	return $this->hasOne(car::class);
    }
}
  