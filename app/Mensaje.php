<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
	//Para que todos los datos se almacenen masivamento excepto el id del mensaje!!!!!!!!!
    protected $guarded = ['id'];
}
