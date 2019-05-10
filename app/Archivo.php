<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $guarded = ['id'];
    
    public function obra()
    {
        return $this->belongsTo(Obra::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
