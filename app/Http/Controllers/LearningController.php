<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApisController;


class LearningController extends Controller
{
    public function learning(){
        $DataUser = json_decode(session()->get('userDataUser'));
        $dataAccount = ['id_user' => $DataUser->id];

        $return = (new ApisController)->APiPost('learning', $dataAccount);
        $commercialProduct = $return[1]["CommercialProduct"];
        // dd($commercialProduct);
        return view('aprendizaje', compact('commercialProduct'));

    }
}