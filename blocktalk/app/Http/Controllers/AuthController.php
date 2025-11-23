<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required|email',
            'senha'=> 'required'
        ]);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => "Credenciais inválidas ou usuário não encontrado."
        ]);

    }




}
