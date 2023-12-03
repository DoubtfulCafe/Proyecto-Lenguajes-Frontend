<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlumnoController extends Controller
{
    public function nuevo(Request $req) {
      //Prepare the request elements
      $data = [
        'nombre' => $req->input('nombre'),
        'apellido' => $req->input('apellido'),
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

    public function listar(){
         $url = '';
         $client = new Client();
 
         $res = $client->get($url);
 
         $data = json_decode($res->getBody()->getContents(), true);
 
         return view('alumnoTabla', compact('data'));
    }

    public function editar($id){
          $client = new Client();
          
          $urlBase = '';
          $reqURL = '{$urlBase}/{$id}';

          $req = $client->get($reqURL);

          $data = json_decode($req->getBody(), true);

          return view('updateForms.alumnoForm', compact('data','id'));
    }

    public function eliminar($id){
      $client = new Client();
          
      $urlBase = '';
      $reqURL = '{$urlBase}/{$id}';

      $req = $client->delete($reqURL);
      
      $res = $client->getBody()->getContents();

      $data = json_decode($res, true);
    }

    public function actualizar(Request $req, $id){
      $client = new Client();
          
      $urlBase = '';
      $reqURL = '{$urlBase}/{$id}';

      $data = [
        'nombre' => $req->input('nombre'),
        'apellido' => $req->input('apellido'),
      ];
      $client = new Client();
      $url = '';
      $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
      ];

      //Structure the request
      $res = $client->put($reqURL,[
        'headers' => $headers,
        'json' => $data,
      ]);

      return $res->getBody()->getContents();
    }
}
