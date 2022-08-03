<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class CarBuyController extends Controller
{
    public function checkout(){

        if (Session::has('carbuylist')) {
            $carbuy = Session::get('carbuylist');
        } else {
            $carbuy = [];
        }
        if (Session::get('userRol') != 'Vendedor' && Session::get('userRol') != 'Administrador') {
            $dataUser = json_decode(Session::get('userDataUser'));
        }else{$dataUser=[];}
        // Session::pull('carbuylist');

        $DataPayment = [

        ];
        // methodPayments
        $retun = (new ApisController)->APiPostProtected('getAllResourceByPayment', $DataPayment);
        if ($retun[0] == 200) {
             //dd($retun[1]['DataStudents']);
            $ListPayment = $retun[1]["methodPayments"];
            $ListStudent = $retun[1]["DataStudents"];
            $ListStudentOther = json_encode($retun[1]["DataStudents"]);
            $ListSalesMenOther = json_encode($retun[1]["DataSalesMen"]);
            $ListSalesMen = $retun[1]["DataSalesMen"];
            $ListRulePayment = $retun[1]["DataRulePayment"];
        } else {
            $ListPayment = [];
            $ListStudent = [];
            $ListSalesMen = [];
            $ListRulePayment = [];
        }
        
        return view('ofertaacademi.checkout', compact('carbuy','ListPayment', 'ListStudent', 'ListSalesMen', 'ListRulePayment', 'dataUser', 'ListStudentOther', 'ListSalesMenOther'));

    }

    public function checkmodal()
    {
        
    }

    

    public function AddCarbuy(Request $request)
    {
        
            //Session::pull('carbuylist');
       
            // dd(Session::get('carbuylist'));
            $jsonCarList = array(
            'idGeneration' => $request['id_Generation'],
            'id_service' => $request['id_service'],
            'nameGeneration' => $request['NameOfer'],
            'monto' => $request['max_cost']
        );
        $page = (object)$jsonCarList;
         //dd($page);

        if (Session::has('carbuylist')) {
            // Session::get('carbuylist'); 
            // Session::pull('carbuylist');
            foreach (Session::get('carbuylist') as $key => $value) {
                // dd($value->id_Generation);
                if ($value->idGeneration ==  $request['idGeneration']) {
                    Session::flash('messageError','Ya tienes esta oferta educativa agregada');
                    return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
                }
            }
            Session::push('carbuylist',$page); 
            Session::flash('messageSuccess','Oferta educativa agregada');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        } else {
            Session::put('carbuylist', []);
            Session::push('carbuylist', $page);
            Session::flash('messageSuccess','Oferta educativa agregada');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        }
        
    }

    public function destroyItemCarBuy($idGeneration)
    {
        $carbuy = Session::get('carbuylist');
        //  dd($carbuy);
        $listCar = array();
        Session::pull('carbuylist');
        Session::put('carbuylist', []);
         //dd($carbuy);
        if (count($carbuy)>1) {
            foreach ($carbuy as $item) {
           
                if ($item->idGeneration != $idGeneration){
                    $jsonCarList = array(
                        'idGeneration' => $item->idGeneration,
                        'id_service' => $item->id_service,
                        'nameGeneration' => $item->NameOfer,
                        'monto' => $item->max_cost
                    );
                    $page = (object)$jsonCarList;
                    Session::push('carbuylist', $page); 
                  
                }
                
            } 
        } else {
            Session::put('carbuylist', []);
        }

        if (Session::has('carbuylist')) {
            $carbuy = Session::get('carbuylist');
        } else {
            $carbuy = [];
        }
        
        Session::flash('messageSuccess','Oferta educativa Eliminada');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
    }
    
    public function SaleTypeOfer(Request $request)
    {
        $DataUser = json_decode(session()->get('userDataUser'));

        $carbuy = Session::get('carbuylist');
        $code_payment = "";
        $enrollment = "";
        $code_rule_payment = "";
        $code_employe = "";

        if(!$request['radios']){
            Session::flash('messageError','Tiene que seleccionar un metodo de pago');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        }else{
           $code_payment = $request['radios'];
        }

        if ($carbuy==null || $carbuy==[]) {
            Session::flash('messageError','Su carrito esta vacío');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        }

        if (Session::get('userRol') == 'Vendedor') {
            if (!$request['enrollment']) {
                Session::flash('messageError','Debes agregar una matricula de un alumno');
                return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
            }

            $Datasalesman = json_decode(session()->get('Datasalesman'));
            $enrollment = $request['enrollment'];
            $code_employe = $Datasalesman->collaborator_code;
            $code_rule_payment = $request['code_rule_payments'];
            $enrollment = $request['enrollment'];
        }

        if (Session::get('userRol') == 'Administrador') {
            if (!$request['enrollment']) {
                Session::flash('messageError','Debes agregar una matricula de un alumno');
                return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
            }else{
                $enrollment = $request['enrollment'];
            }

            if (!$request['code_rule_payments']) {
                Session::flash('messageError','Debes agregar un código de regla de pago');
                return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
            }else{
                $code_rule_payment = $request['code_rule_payments'];
            }

            if (!$request['code_employe']) {
                Session::flash('messageError','Debes agregar un código de vendedor');
                return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
            }else{
                $code_employe = $request['code_employe'];
            }
        }

        $totalPayment = 0;
        foreach ($carbuy as $key => $value) {
            $totalPayment += $value->monto;
            $carbuy[$key]->monto = floatval($value->monto);
        }
        //dd(floatval($totalPayment));
        $DataSale = [
        "id_user" => $enrollment!=null ? $enrollment : $DataUser->id,
        "type_payment_code" => $code_payment,
        "listOfertSold" => $carbuy,
        "code_paymet_rules" => $code_rule_payment,
        "code_salesman" => $code_employe,
        "total" => floatval($totalPayment),
        "subtotal" => floatval($totalPayment),
        "iva" => 150,
        ];
        //dd($DataSale);
        $return = (new ApisController)->APiPostProtected('buyService',$DataSale);
        
        if ($return[0] == 200) {
            Session::pull('carbuylist');
            $id_account = $return[1]["id_account"];

            $DataSend = [
                "id_account" => $id_account,
                ];
    
            $return = (new ApisController)->APiPostProtected('getAllDataInvoice',$DataSend);
    
        
    
            if ($return[0] == 200) {
    
                
                $DataAccount = $return[1]["DataAccount"];
                $listSalesDetail = $return[1]["DataSalesDetail"];
    
               
                $formatdate = Carbon::parse($DataAccount['date_sale'])->format('d-m-Y');
                // dd($formatdate);
    
            return view('ofertaacademi.invoice',compact('listSalesDetail', 'DataAccount', 'formatdate'));
            } else {
                Session::flash('messageError','Ocurrio un error');
                return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
            }

        // return view('ofertaacademi.invoice');
        //return redirect()->action('App\Http\Controllers\CarBuyController@checkout'); factura
        } else {
            Session::flash('messageError','Ocurrio un error');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        }

    }

    public function FacturaTest()
    {
        $DataSend = [
            "id_account" => 21,
            ];

        $return = (new ApisController)->APiPostProtected('getAllDataInvoice',$DataSend);

    

        if ($return[0] == 200) {

            
            $DataAccount = $return[1]["DataAccount"];
            $listSalesDetail = $return[1]["DataSalesDetail"];

           
            $formatdate = Carbon::parse($DataAccount['date_sale'])->format('d-m-Y');
            // dd($formatdate);

        return view('ofertaacademi.invoice',compact('listSalesDetail', 'DataAccount', 'formatdate'));
        } else {
            Session::flash('messageError','Ocurrio un error');
            return redirect()->action('App\Http\Controllers\CarBuyController@checkout');
        }
        
    }
    

}
