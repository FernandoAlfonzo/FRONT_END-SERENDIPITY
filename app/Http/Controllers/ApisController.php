<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Redirect;

class ApisController extends Controller
{   

    public function APiGet($url)
    {
       $dataReturn = [];
       $client = new Client();

       try {
                $response = $client->request('GET', env('URL_BACK').$url, []); 
                //dd($response->getStatusCode());
                //dd(json_decode($response->getBody(), true)); 
                //$data = json_decode($response->getBody(), true);
                // $data2 = json_decode($data['list_catalog']);
                $dataReturn[0] = $response->getStatusCode();
                $dataReturn[1] = json_decode($response->getBody(), true);
                return $dataReturn;
        }catch (\GuzzleHttp\Exception\RequestException $e) {
                if ($e->hasResponse()) {
                    $response = $e->getResponse();
                    $dataReturn[0] = $response->getStatusCode();
                    $dataReturn[1] = json_decode((string) $response->getBody()); // Body as the decoded JSON;
                    return $dataReturn;
                }
            } 
    }

    public function APiGetParameter($url, $param)
    {
        $dataReturn = [];
       $client = new Client();

       try {
                $response = $client->request('GET', env('URL_BACK').$url.'/'.$param, []); 
                //dd($response->getStatusCode());
                //dd(json_decode($response->getBody(), true)); 
                //$data = json_decode($response->getBody(), true);
                // $data2 = json_decode($data['list_catalog']);
                $dataReturn[0] = $response->getStatusCode();
                $dataReturn[1] = json_decode($response->getBody(), true);
                return $dataReturn;
        }catch (\GuzzleHttp\Exception\RequestException $e) {
                if ($e->hasResponse()) {
                    $response = $e->getResponse();
                    $dataReturn[0] = $response->getStatusCode();
                    $dataReturn[1] = json_decode((string) $response->getBody()); // Body as the decoded JSON;
                    return $dataReturn;
                }
            } 
    }

    public function APiPost($url,$body)
    {
        $dataReturn = [];
        $client = new Client();

       try {
                $response = $client->request('POST', env('URL_BACK').$url, [
                    'form_params' => $body 
                ]); 
                //echo $response->getStatusCode();
                //dd(json_decode($response->getBody(), true)); 
                //$data = json_decode($response->getBody(), true);
                // $data2 = json_decode($data['list_catalog']);
                $dataReturn[0] = $response->getStatusCode();
                $dataReturn[1] = json_decode($response->getBody(), true);
                return $dataReturn;
        }catch (\GuzzleHttp\Exception\RequestException $e) {
                if ($e->hasResponse()) {
                    $response = $e->getResponse();
                    echo $response->getBody();
                    $dataReturn[0] = $response->getStatusCode();
                    $dataReturn[1] = json_decode((string) $response->getBody()); // Body as the decoded JSON;
                    return $dataReturn;
                }
            }
    }

    public function APiPostProtected($url,$body)
    {
        $dataReturn = [];
        $client = new Client();

       try {
                $response = $client->request('POST', env('URL_BACK').$url, [
                    'form_params' => $body ,
                    'headers' => [
                        'Authorization' => 'Bearer '.session()->get('userToken')
                      ],
                ]); 
                //echo $response->getStatusCode();
                //dd(json_decode($response->getBody(), true)); 
                //$data = json_decode($response->getBody(), true);
                // $data2 = json_decode($data['list_catalog']);
                $dataReturn[0] = $response->getStatusCode();
                $dataReturn[1] = json_decode($response->getBody(), true);
                return $dataReturn;
        }catch (\GuzzleHttp\Exception\RequestException $e) {
                if ($e->hasResponse()) {
                    //abort(404, "Ocurrio un error");
                    $response = $e->getResponse();
                    //echo $response->getBody();
                    $dataReturn[0] = $response->getStatusCode();
                    $dataReturn[1] = json_decode((string) $response->getBody()); // Body as the decoded JSON;

                    return $dataReturn;
                }
            }
    }
}
