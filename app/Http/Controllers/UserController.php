<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApisController;
use Redirect;
use Session;


class UserController extends Controller
{
    public function profile()
    {
        // return view('profile');
        //dd(session()->get('userToken'));
        $DataUser = json_decode(session()->get('userDataUser'));
        $register = ["id_user" => $DataUser->id];
        $retun = (new ApisController)->APiPostProtected('getDataUser',$register);

        // dd($retun);
        //validar que con la cuenta de gogle acepte el token 
        if ($retun[0] == 200) {
            
            $DataUserObject = json_decode(json_encode($retun[1]["DataUser"]), FALSE);
            $CatalogGener = json_decode($retun[1]["CatalogsGenero"]);
            $CatalogPaise = json_decode($retun[1]["CatalogsPaises"]);
            $CatalogProfesione = json_decode($retun[1]["CatalofsProfesiones"]);
            $Catalogcurrency_list = json_decode($retun[1]['Catalogscurrency_list']);
            $CatalogsUse_of_cfdi = json_decode($retun[1]['CatalogsUse_of_cfdi']);
            $CatalogsWayToPay = json_decode($retun[1]['CatalogsWayToPay']);
            $CatalogsPhysical_or_moral_person = json_decode($retun[1]['CatalogsPhysical_or_moral_person']);
            return view('profile', compact('DataUserObject', 'CatalogGener', 'CatalogPaise', 'CatalogProfesione', 'Catalogcurrency_list', 'CatalogsUse_of_cfdi', 'CatalogsWayToPay', 'CatalogsPhysical_or_moral_person'));
        } else {
            Session::flash('message','Ocurrio un error');
            return Redirect::to('login');
        }

        
    }

    public function perfilStore(Request $request)
    {
        $DataUser = json_decode(session()->get('userDataUser'));

        $DataUpdate = [
            "code" => "SYST_PERSON",
            "id_user" => $DataUser->id,
            "namePerson" => $request['namePerson'],
            "last_father_namePerson" => $request['last_father_namePerson'],
            "last_mother_namePerson" => $request['last_mother_namePerson'],
            "birth_datePerson" => $request['birth_datePerson'],
            "genderPerson" => $request['genderPerson'],
            "phonePerson" => $request['phonePerson'],
            "professionPerson" => $request['professionPerson'],
            "facebookPerson" => $request['facebookPerson'],
        ];
        
        $retun = (new ApisController)->APiPostProtected('updateDataUser',$DataUpdate);
        if ($retun[0] == 200) {
            Session::flash('messageSuccess','Datos Actualizados');
           return redirect()->route('profile');
        } else {
            Session::flash('messageError','Ocurrio un error');
            return redirect()->route('profile');
        }
        
    }

    public function addressStore(Request $request)
    {
        $DataUser = json_decode(session()->get('userDataUser'));

        $DataAddress = [
            "code" => "SYST_ADDRESS",
            "id_user" => $DataUser->id,
            "stateAddress" => $request['stateAddress'],
            "countryAddress" => $request['countryAddress'],
            "cityAddress" => $request['cityAddress'],
            "locationAddress" => $request['locationAddress'],
            "postalCode" => $request['postalCode'],
            "full_addressAddress" => $request['full_addressAddress'],
        ];
        
        
        $retun = (new ApisController)->APiPostProtected('updateDataUser',$DataAddress);
        if ($retun[0] == 200) {
            Session::flash('messageSuccess','Datos Actualizados');
           return redirect()->route('profile');
        } else {
            Session::flash('messageError','Ocurrio un error');
            return redirect()->route('profile');
        }
    }

    public function validateEmail($request)
    {
        dd($request->route()->parameters());
        $DataToken = ['token' => $token_email];
        $return = (new ApisController)->APiPost('resetpassValidate',$DataToken);
        if ($return[0]==200) {
            $returnValidate = (new ApisController)->APiPost('updateEmailValidate',$DataToken);
            if ($returnValidate[0]==200) {
                Session::flash('message','Correo validado');
                return view('login');
             }else{
                Session::flash('message','Ocurrio un error');
                return view('login');
             }
         }else{
            Session::flash('message','El token es invalido o expiro');
            return view('login');
         }
    }
    
}

//     public function documentStore(Request $request)
//     {
//         dd($request);

//         $register = [
//             "id_user" => $DataUser->id,
//             ""
//         ]
//     }
// }






























            // $request->validate([
            //     'namePerson' => 'required',
            //     'last_father_namePerson' => 'required',
            //     'last_mother_namePerson' => 'required',
            //     'birth_datePerson' => 'required',
            //     'gender' => 'required',
            //     'phonePerson' => 'required',
            //     'email' => 'required',
            //     'facebookPerson'=>'required',
            //     'stateAddress'=>'required',
            //     'cityAdress'=>'required',
            //     'locationAddress'=>'required',
            //     'postalCode'=>'required',
            //     'professionAddress'=>'required'
            // ]);


            // 'namePerson' => 'required',
            // 'last_father_namePerson' => 'required',
            // 'last_mother_namePerson' => 'required',
            // 'birth_datePerson' => 'required',
            // 'gender' => 'required',
            // 'phonePerson' => 'required',
            // 'email' => 'required',
            // 'facebookPerson'=>'required',
            // 'stateAddress'=>'required',
            // 'cityAdress'=>'required',
            // 'locationAddress'=>'required',
            // 'postalCode'=>'required',
            // 'professionAddress'=>'required'
