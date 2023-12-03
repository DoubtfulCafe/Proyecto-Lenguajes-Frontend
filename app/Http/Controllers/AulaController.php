<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AulaController extends Controller
{
    public function nuevo(Request $req) {
            //Prepare the request elements
            $data = [
              'codigo' => $req->input('codigo'),
              'tipoAula' => $req->input('tipoAula'),
              'capacidad' => $req->input('capacidad'),
            ];
            $client = new Client();
            $url = '';
            $headers = [
              'Content-Type' => 'application/json',
              'Accept' => 'application/json',
            ];
      
            //Structure the request
            $res = $client->post($url,[
              'headers' => $headers,
              'json' => $data,
            ]);
      
            return $res->getBody()->getContents(); 
      }
}
