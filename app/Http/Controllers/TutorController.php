<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
    	return view('tutor.index');
    }
}
