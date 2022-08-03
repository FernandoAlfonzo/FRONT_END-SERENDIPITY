<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Session;

class PaymentsController extends Controller
{



    public function saldosypagos(){
        $DataUser = json_decode(session()->get('userDataUser'));
        $dataAccount = ['id_user'=> $DataUser->id];
       
        $return = (new ApisController)->APiPost('dataAccount',$dataAccount);
        $listAccount = $return[1]["data"];
        // dd($return);

        // $formatdate = Carbon::parse($listAccount['date_sale'])->format('d-m-Y');
        // dd($formatdate);
        return view('saldosypagos', compact('listAccount'));
    }



    public function detallepago($id_account){
        
        $dataPayments = ['id_account'=> $id_account];

        $return = (new ApisController)->APiPost('paymentDetail',$dataPayments);
        $listPayments = $return[1]["data"];
        // dd($return);

        return view('detallepago', compact('listPayments'));
    
    }

    public function detallecompra(){
        return view('detallecompra');

    }

    public function SendImgPayment(Request $request)
    {   
        $DataUser = json_decode(session()->get('userDataUser'));
        $dataAccount = ['id_user'=> $DataUser->id];

        $type = $request->file('ticketdata')->getClientOriginalExtension();
        $data = base64_encode(file_get_contents($request->file('ticketdata')));
        $base64 = 'data:image/' . $type . ';base64,' . $data;
        $dataPayments = [
        'base64Img'=> $base64,
        'id_user'=> $DataUser->id];
        $return = (new ApisController)->APiPostProtected('saveImgPayment',$dataPayments);
        if ($return[0] == 200) {
            Session::flash('messageSuccess','Se guardo corretamente la imagen');
            return redirect()->action('App\Http\Controllers\PaymentsController@saldosypagos',);
        } else {
            Session::flash('messageError','Ocurrio un error');
            return redirect()->action('App\Http\Controllers\PaymentsController@saldosypagos',);
        }
    }
}
