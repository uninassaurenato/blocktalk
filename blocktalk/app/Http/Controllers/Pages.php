<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index() {
        return view("Index");
    }

    public function guide() {
        return view("Guide");
    }

    public function tool() {
        return view("Tool");
    }

    public function cadastro() {
        return view("Cadastro");
    }
}
