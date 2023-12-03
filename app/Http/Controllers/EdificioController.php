<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public function nuevo(Request $req) {
            //Prepare the request elements
            $data = [
              'nombre' => $req->input('nombre'),
              'cantidad' => $req->input('cantidad'),
              'aulas' => $req->input('aulas'),
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
