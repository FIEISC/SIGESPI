<?php

namespace sigespi\Http\Controllers;

use Illuminate\Http\Request;

use sigespi\Http\Requests\RegistroRequest;

use sigespi\Http\Requests\LoginRequest;

use sigespi\User;

use Auth;

class AuthController extends Controller
{
    public function registro()
    {
    	return view('auth.registro');
    }

    public function datosRegistro(RegistroRequest $request)
    {
    	User::create([
            
            'nom_docente' => $request->input('nom_docente'),
            'no_docente' => $request->input('no_docente'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'plantel' => $request->input('plantel')
    		]);
    }

    public function login()
    {
    	return view('auth.login');
    }

    public function datosLogin(LoginRequest $request)
    {
         $no_docente = $request->input('no_docente');
         $password = $request->input('password');

         if (!Auth::attempt(['no_docente' => $no_docente, 'password' => $password, 'activo' => 1])) 
         {
             return redirect()->back()->with('info', 'Datos Incorrectos');
         }

        return "Estas Adentro";
    }

    public function salir()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
