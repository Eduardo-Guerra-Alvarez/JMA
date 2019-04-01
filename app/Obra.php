<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //protected $table = 'obras';
    public function trabajadores(){
		return $this->belongsToMany(Trabajadores::class);
	}
}
