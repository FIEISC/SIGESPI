<?php

namespace sigespi;

use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
    protected $table = 'planteles';

    protected $fillable = ['nom_plantel', 'siglas', 'campus_id'];
}
