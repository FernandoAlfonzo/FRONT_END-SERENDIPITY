<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApisController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class landingController extends Controller
{
    public function landing()
    {
        $data = [];
        $return = (new ApisController)->APiPost('getAllService',$data);
        $type_services = $return[1]['DataService'];
        // dd($type_services);  
        return view('initialView.landingpage', compact('type_services'));
    }
    
    public function services($id){
        
        $data = [];
        $return = (new ApisController)->APiPost('getAllService',$data);
        $type_services = $return[1]['DataService'];

        $dataOffer = ["id_service" => $id];
        $returnOffer = (new ApisController)->APiPost('getOferByIdService',$dataOffer);
        if ($returnOffer[0] == 200) {
           $offers = $this->paginate($returnOffer[1]['DataService']);
        } else {
            $offers = [];
        }
        // dd($services);
        return view('listado.listados', compact('type_services', 'offers'));
    }

    public function paginate($items, $perPage = 3, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
