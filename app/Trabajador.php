<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	//protected $fillable = ['nombre', 'domicilio', 'email', 'rfc'];
	protected $guarded = ['id'];
    public function departamento(){
    	return $this->belongsTo('App\Departamento', 'departamento_id');
    }


    protected $table = 'trabajadores'; // para asignar un nombre a la tabla
    
    public function obras(){
		return $this->belongsToMany(Obra::class);

		
	}
	protected $fillable = ['nombre', 'departamento_id', 'domicilio', 'email', 'rfc'];
}
