<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function store(Request $request)
    {
        //validação
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:users,email',
            'senha' => 'required|min:4'
        ]);

        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->senha),
        ]);

        return redirect()->back()->with('success', 'usuario cadastrado!');

    }
}
