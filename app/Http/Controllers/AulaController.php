<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AulaController extends Controller
{
    public function nuevo(Request $req) {
            //Prepare the request elements
            $data = [
              'capacidad' => $req->input('capacidad'),
              'codigoedificio' => $req->input('codigoEdificio'),
              'idtipoaula' => $req->input('tipoAula'),
              'codigoaula' => $req->input('codigoAula'),
            ];
            $client = new Client();
            $url = 'localhost:8090/api/aulas/guardar';
            $headers = [
              'Content-Type' => 'application/json',
              'Accept' => 'application/json',
            ];
            //Structure the request
            $res = $client->post($url,[
              'headers' => $headers,
              'json' => $data,
            ]);
            
            //dd($res);
            return redirect()->route('aula.all');
          }

      public function listar(){ 
        $url = 'localhost:8090/api/aulas/todos';
        $client = new Client();

        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);

        return view('tables.aulaTabla', compact('data'));
   }

   public function eliminar($id)
   {
     $client = new Client();
 
     $urlBase = 'localhost:8090/api/aulas/eliminar';
     $reqURL = "{$urlBase}/{$id}";
     $request = $client->delete($reqURL);
    return redirect()->route('aula.all');
   }

   public function editar($id){
    $client = new Client();
    
    $urlBase = 'localhost:8090/api/aulas/obtener';
    $reqURL = '{$urlBase}/{$id}';

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.aulaForm', compact('data','id'));
}
 
   public function actualizar(Request $req, $id)
   {
     $client = new Client();
 
     $urlBase = 'localhost:8090/api/aulas/actualizar';
     $reqURL = '{$urlBase}/{$id}';
 
     $data = [
      'codigoEdificio' => $req->input('codigoEdificio'),
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
