<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $fillable = ['nom_carrera', 'siglas', 'grupo', 'plantel_id'];

    public function protocolos()
    {
    	return $this->hasMany(Protocolo::class);
    }
}
