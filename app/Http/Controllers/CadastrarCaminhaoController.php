<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarCaminhaoController extends Controller
{
    public function MostrarCadastroCaminhao()
    {
        return view('cadastrar-caminhao');
    }

}