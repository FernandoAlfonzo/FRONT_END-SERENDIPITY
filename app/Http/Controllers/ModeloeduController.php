<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloeduController extends Controller
{
    public function modelo(){
        $data = [];
        $return = (new ApisController)->APiPost('getAllService',$data);
        $type_services = $return[1]['DataService'];

        return view('modeloedu', compact('type_services'));
    }
}
