<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashClienteController extends Controller
{
    public function index()
    {
        return view('cliente.dashboard');
    }
}
