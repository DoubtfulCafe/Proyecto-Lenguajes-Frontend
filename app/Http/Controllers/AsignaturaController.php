<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AsignaturaController extends Controller
{
    public function nuevo(Request $req) {
            //Prepare the request elements
            $data = [
              'nombre' => $req->input('nombre'),
              'tipoAula' => $req->input('tipoAula'),
              'requisito' => $req->input('requisito'),
              'secciones' => $req->input('secciones'),
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
