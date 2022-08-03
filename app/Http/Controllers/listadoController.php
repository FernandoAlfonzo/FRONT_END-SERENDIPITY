<?php

namespace App\Http\Controllers;



class listadoController extends Controller
{
    public function lista()
    {
        return view('listado.listados');
    }
}
