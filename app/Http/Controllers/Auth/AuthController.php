<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApisController;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
use Redirect;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $register = [
                    "name" => $request['name'],
                    "last_father_name" => $request['last_father_name'],
                    "last_mother_name" => $request['last_mother_name'],
                    "email" => $request['email'],
                    "password" => $request['password'],
                    "login_for_google" => false
        ];

        $retun = (new ApisController)->APiPost('register',$register);

        if ($retun[0] == 200) {
            Session::flash('message','Datos Guardados Correctamente');
            return Redirect::to('login');
        } else {
            Session::flash('message','Ocurrio un error');
            return Redirect::to('register');
        }
        

        /*Session::flash('message','Datos Guardados Correctamente');
        return Redirect::to('login');*/
        //descomentar para subir datos
        //dd($promise->getBody());
    }

    public function indexlogin()
    {
        //Session::flash('message','Datos guardados');
        return view('login');
    }

   
 
    public function login(Request $request)
    {   
        

        $login = [
            'email' => $request['email'],
            'password' => $request['password']
            ];
            //dd($login);
            $retun = (new ApisController)->APiPost('login',$login);
            //dd($retun[1]);
            ////Agregar datos de usuario a la sessión
            //Session::put('userToken',$retun[1]->accessToken);

            //$token = json_decode();
            //dd($retun[1]["Rol"]["name"]);
            if ($retun[0] == 200) {
                $request->session()->put('userToken', $retun[1]["accessToken"]);
                $request->session()->put('userToken_type', $retun[1]["token_type"]);
                $request->session()->put('userDataUser', json_encode($retun[1]["DataPerson"]));
                $request->session()->put('Datasalesman', json_encode($retun[1]["Datasalesman"]));
                $request->session()->put('user.permissions', $retun[1]["permissions"]);
                $request->session()->put('userRolData', json_encode($retun[1]["Rol"]));
                $request->session()->put('userRol', $retun[1]["Rol"]["name"]);
                $request->session()->put('userEmail', $retun[1]["DataPerson"]["email"]);
                Session::flash('message','Inicio de sesión correcta');
                return Redirect::to('/');
            } else {
                Session::flash('message','Ocurrio un error');
                return Redirect::to('register');
            }
    }


    public function handleProviderCallback()
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver('google')->user();
        
        $email = ['email' => $social_user->email];
        
        $retun = (new ApisController)->APiPost('validateExistEmail',$email);
        
        if($retun[0] != 400){
            $retunLogin = (new ApisController)->APiPost('google-login',$email);
            // dd($retunLogin);
            if ($retunLogin[0] == 200) {
                session()->put('userToken', $retunLogin[1]["accessToken"]);
                session()->put('userToken_type', $retunLogin[1]["token_type"]);
                session()->put('userDataUser', json_encode($retunLogin[1]["DataPerson"]));
                session()->put('Datasalesman', json_encode($retunLogin[1]["Datasalesman"]));
                session()->put('user.permissions', $retunLogin[1]["permissions"]);
                session()->put('userRolData', json_encode($retunLogin[1]["Rol"]));
                session()->put('userRol', $retunLogin[1]["Rol"]["name"]);
                session()->put('userEmail', $retunLogin[1]["DataPerson"]["email"]);
                Session::flash('message','Inicio de sesión correcta');
                return Redirect::to('/');
            } else {
                Session::flash('message','Ocurrio un error');
                return Redirect::to('register');
            }
        }else{
                $register = [
                "name" => $social_user->user['given_name'],
                "email" => $social_user->user['email'],
                "email_verified" => $social_user->user['email_verified'],
                "login_for_google" => true
                ];

                $retun = (new ApisController)->APiPost('register',$register);
               //dd($retun);
                if ($retun[0] == 200) {
                    Session::flash('message','Datos Guardados Correctamente');
                    return Redirect::to('login');
                } else {
                    Session::flash('message','Ocurrio un error');
                    return Redirect::to('register');
                }

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function logout()
    {
        //$var = session()->get('user.Rol');
        //dd( session() );
        session()->flush();
        return Redirect::to('/login');
    }
}
