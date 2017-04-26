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

        return redirect()->route('login')->with('info2', 'Registro exitoso, ponte en contacto con el coordinador académico para la activación de tu cuenta.');
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

      
       if (Auth::check()) 
       {
        
        $user = Auth::user();
        $roles = $user->rol;
        $rol = explode(',', $roles);

        if ($rol[0] == 1 && $rol[1] == 4) 
        {
            return redirect()->route('nivel1');
        }

       }
    }

    public function salir()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
