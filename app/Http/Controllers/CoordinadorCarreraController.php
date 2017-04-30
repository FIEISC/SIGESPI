<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

class CoordinadorCarreraController extends Controller
{
    public function index()
    {
    	return view('coordinadorCarrera.index');
    }
}
