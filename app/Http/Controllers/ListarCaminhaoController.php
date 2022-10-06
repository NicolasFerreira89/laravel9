<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarCaminhaoController extends Controller
{
    
    public function listarCaminhao()
    {
        return view('listarCaminhao');
    }

}