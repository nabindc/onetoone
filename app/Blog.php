<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'name', 'description',
    ];

    public function category(){
        return $this->hasOne(Category::class);

    }
}
