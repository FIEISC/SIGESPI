<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nom_alumno', 'email', 'semestre', 'carrera_id', 'equipo_id'];
}
