<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public function departamento(){
    	return $this->belongsTo('Departamento');
    }
}
