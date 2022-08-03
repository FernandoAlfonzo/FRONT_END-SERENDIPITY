<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function resumen($id_product){
        {
            $data = [];
            $return = (new ApisController)->APiPost('getAllService',$data);
            $type_services = $return[1]['DataService'];
            // dd($type_services);  
            return view('resumen', compact('type_services'));
        }
        
    }
}