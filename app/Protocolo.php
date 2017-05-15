<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Protocolo extends Model
{
    protected $table = 'protocolos';

    protected $fillable = ['nom_protocolo', 'universidad', 'facultad', 'carrera', 'introduccion', 'antecedentes', 'objetivos', 'obj_particulares', 'justificacion', 'herramientas', 'entregables', 'preguntas_guia', 'semestre', 'carrera_id', 'ciclo_id', 'user_id'];

   //Relacion 1:N con protocolos!!!!!!!!!!!!
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    //Relacion N:M con protocolos!!!!!!!!!!!
    public function manyUsers()
    {
        return $this->belongsToMany(User::class);
    }
    
    //Relacion 1:N con ciclos!!!!!!!!!!!!!!!!
    public function ciclo()
    {
        return $this->belongsTo(Ciclo::class);
    }

    //Relacion 1:N con carreras!!!!!!!!!!!!!!
    public function carrera()
    {
    	return $this->belongsTo(Carrera::class);
    }


/*    public function getNumUsersAttribute()
    {
        return count($this->manyUsers);
    }*/
    
    //Para que en el formulario de editar se marquen los docentes que ya estaban asignados!!
    public function getUsersAttribute()
    {
        return $this->manyUsers()->pluck('user_id')->toArray();
    }

    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }

}
