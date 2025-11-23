<?php

namespace App\Http\Controllers;
use App\Models\Campo;
use App\Models\Painel;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function tool(){
        return view('Tool',[
            'paineis' => Painel::all(),
            'campos' => []
        ]);
       
    }

    public function mostrar($id)
    {
     $paineis = Painel::all();
     $painelSelecionado = Painel::with('campos')->findOrFail($id);
     
     return view('Tool', [
        'paineis' => $paineis,
        'campos' => $painelSelecionado->campos
     ]);
    }
}
