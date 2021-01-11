<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function indexCadastro()
    {
        return view('Cliente.cadastroCliente');
    }

    public function indexShow(){
        return view('Cliente.tabelaCliente');
    }

    public function indexInfoCliente(){
        return view('Cliente.info');
    }
}
