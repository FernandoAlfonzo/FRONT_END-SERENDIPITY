<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApisController;

class EducativeofferController extends Controller
{   

    public function getAllServices()
    {
        $data = [];
        $retun = (new ApisController)->APiPost('getAllService',$data);
        if ($retun[0] == 200) {
            return response()->json([
                'List' => $retun[1]['DataService'],
            ], 200);
        } else {
            return response()->json([
                'List' => [],
            ], 400);
        }
    }

    public function getAllOferByService($id)
    {
       
    }

    public function EducativeOffer($id){
        
        $data = ["id_service" => $id];
        $retun = (new ApisController)->APiPost('getOferByIdService',$data);
        if ($retun[0] == 200) {
           $listOferts = $retun[1]['DataService'];
        } else {
            $listOferts = [];
        }
        // dd($listOferts);
        return view('ofertaacademi.EducativeOffert')->with('listOferts',$listOferts);
    }

    public function ofertadiplomado(){
        return view('ofertaacademi.diplomado');
    }
    public function ofertamaestria(){
        return view('ofertaacademi.maestria');
    }
    public function ofertaseminario(){
        return view('ofertaacademi.seminario');
    }
    public function ofertataller(){
        return view('ofertaacademi.taller');
    }
}
