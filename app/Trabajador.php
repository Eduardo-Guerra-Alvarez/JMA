<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    puiblic function departamento(){
    	return $this->belongsTo('Departamento');
    }
}
