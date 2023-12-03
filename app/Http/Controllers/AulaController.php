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

      public function listar(){
        $url = '';
        $client = new Client();

        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);

        return view('aulaTabla', compact('data'));
   }

   public function eliminar($id)
   {
     $client = new Client();
 
     $urlBase = '';
     $reqURL = '{$urlBase}/{$id}';
 
     $req = $client->delete($reqURL);
 
     $res = $client->getBody()->getContents();
 
     $data = json_decode($res, true);
   }

   public function editar($id){
    $client = new Client();
    
    $urlBase = '';
    $reqURL = '{$urlBase}/{$id}';

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.aulaForm', compact('data','id'));
}
 
   public function actualizar(Request $req, $id)
   {
     $client = new Client();
 
     $urlBase = '';
     $reqURL = '{$urlBase}/{$id}';
 
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
     $res = $client->put($reqURL, [
       'headers' => $headers,
       'json' => $data,
     ]);
 
     return $res->getBody()->getContents();
   }
}
