<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class LandingPageController extends Controller
{
    public function test()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://sistemaserendipity.lendus.app/api/get/catalog/code";

        try {
            $response = $client->request('POST', $url, [
                'form_params' => [
                    'code' => 'SYS_CAT_AVISO'
                ]
            ]); 
            
            //dd($response->getStatusCode());
            //dd(json_decode($response->getBody(), true)); 
            $data = json_decode($response->getBody(), true);
            $data2 = json_decode($data['list_catalog']);
            return view('privacidad', compact('data2'));
            //return view('privacidad');
        }
        catch (\GuzzleHttp\Exception\RequestException $e) {
            /**
             * Here we actually catch the instance of GuzzleHttp\Psr7\Response
             * (find it in ./vendor/guzzlehttp/psr7/src/Response.php) with all
             * its own and its 'Message' trait's methods. See more explanations below.
             *
             * So you can have: HTTP status code, message, headers and body.
             * Just check the exception object has the response before.
             */
            if ($e->hasResponse()) {
                $response = $e->getResponse();
                var_dump($response->getStatusCode()); // HTTP status code;
                var_dump($response->getReasonPhrase()); // Response message;
                var_dump((string) $response->getBody()); // Body, normally it is JSON;
                var_dump(json_decode((string) $response->getBody())); // Body as the decoded JSON;
                var_dump($response->getHeaders()); // Headers array;
                var_dump($response->hasHeader('Content-Type')); // Is the header presented?
                var_dump($response->getHeader('Content-Type')[0]); // Concrete header value;
            }
        }
        

        // $responseBody = json_decode($response->getBody());

        

        // public function d(Type $var = null)
        // {
        //     # code...
        // }
    }
}
