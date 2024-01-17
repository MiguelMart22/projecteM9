<?php

namespace App\Http\Controllers;

use App\Models\Destino;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::distinct()->get();
        return view('destinos.index', compact('destinos'));
    }
}
