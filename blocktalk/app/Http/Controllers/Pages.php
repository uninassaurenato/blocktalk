<?php
// Define os representantes das páginas no route, não mexer no que já estiver aqui prfv :^)
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index() {
        // Página inicial do site
        return view("Index");
    }

    public function guide() {
        // Página de "guia", acessível APENAS PELA página inicial
        return view("Guide");
    }

    public function tool() {
        // Página de "ferramenta" que permite o usuário a realmente usar a ferramenta
        return view("Tool");
    }
}
