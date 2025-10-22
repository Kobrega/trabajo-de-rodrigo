<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function mostrarLogin() {
        return view('login');
    }

    public function entrar(Request $request) {
        $datos = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($datos)) {
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Correo o contraseña incorrectos');
        }
    }

    // Cierra la sesion
    public function salir() {
        Auth::logout();
        return redirect('/login');
    }
}
