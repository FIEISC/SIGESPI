<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
	function __contruct()
	{
		return $this->middleware('auth');
	}
	
    public function index()
    {
    	return view('docente.index');
    }
}
