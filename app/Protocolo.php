<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    protected $table = 'protocolos';

    protected $fillable = ['nom_protocolo', 'universidad', 'facultad', 'carrera', 'introduccion', 'antecedentes', 'objetivos', 'obj_particulares', 'justificacion', 'herramientas', 'entregables', 'preguntas_guia', 'semestre', 'carrera_id', 'ciclo_id', 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function carrera()
    {
    	return $this->belongsTo(Carrera::class);
    }
}
