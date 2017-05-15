<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['nom_equipo', 'user_id', 'protocolo_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function protocolo()
    {
    	return $this->belongsTo(Protocolo::class);
    }
}
