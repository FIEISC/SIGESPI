<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{

	function __construct()
	{
		return $this->middleware('auth');
	}
	
    public function nivel1()
    {
    	return view('niveles.nivel1');
    }
}
