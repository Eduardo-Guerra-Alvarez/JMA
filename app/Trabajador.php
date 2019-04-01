<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	//protected $fillable = ['nombre', 'domicilio', 'email', 'rfc'];
	protected $guarded = ['id'];
    public function departamento(){
    	return $this->belongsTo('App\Departamento', 'IDdepartamento');
    }
    protected $table = 'trabajadores'; // para asignar un nombre a la tabla
    public function obras(){
		return $this->belongsToMany(Obras::class);

		
	}
	protected $fillable = ['nombre', 'domicilio', 'rfc'];
}
