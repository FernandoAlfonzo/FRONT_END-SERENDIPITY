<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\ApisController;
class ResetPassController extends Controller
{
    public function contraper(){
        return view('contraperdida');
    }

    public function resetpasssend(Request $request)
    {   
        $email = ['email' => $request['email']];
        $return = (new ApisController)->APiPost('resetpass',$email);
        if ($return[0]==200) {
            Session::flash('message','Correo enviado');
            return Redirect::to('login');
        } else {
            Session::flash('message','Ocurrio un error');
            return Redirect::to('login');
        }
        
        
    }

    public function resetpass($token){
    
        $DataToken = ['token' => $token];
        $return = (new ApisController)->APiPost('resetpassValidate',$DataToken);
        if ($return[0]==200) {
            return view('resetp');
         }else{
            Session::flash('message','El token es invalido o expiro');
            return view('contraperdida');
         }
    }

    public function validateEmail($token)
    {
        dd($token);
        $DataToken = ['token' => $token];
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
