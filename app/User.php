<?php

namespace sigespi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nom_docente', 'no_docente', 'email', 'password', 'plantel'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
