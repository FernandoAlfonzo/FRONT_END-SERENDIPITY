<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function bandeja(){
        return view('bandeja');
    }
    public function enviados(){
        return view('enviados');
    }
    public function eliminados(){
        return view('eliminados');
    }
}
