<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AulaController extends Controller
{
    public function nuevo(Request $req) {
            $url = "localhost:8090/api/tipoaulas/obtener/{$req->input('tipoAula')}";
            $client = new Client();

            $res = $client->get($url);

            $aulas = json_decode($res->getBody()->getContents(), true);
            //RECOGER EDIFICIOS
            $url2 = "localhost:8090/api/edificios/obtener/{$req->input('codigoEdificio')}";
            $client2 = new Client();

            $res2 = $client2->get($url2);

            $edificios = json_decode($res2->getBody()->getContents(), true);

            //Prepare the request elements
            $data = [
              'codigoAula' => $req->input('codigoAula'),
              'edificio' => [
                'codigoEdificio' => $edificios['codigoEdificio'],
                'nombre' => $edificios['nombre'],
                'cantidadAulas' => $edificios['cantidadAulas'],
              ],
              'tipoAula' => [
                'idTipoAula' => $aulas['idTipoAula'],
                'descripcion' => $aulas['descripcion'],
              ],
              'capacidad' => $req->input('capacidad'),
            ];

            $client = new Client();
            $urlCrear = 'localhost:8090/api/aulas/guardar';
            $headers = [
              'Content-Type' => 'application/json',
              'Accept' => 'application/json',
            ];
            //dd($data);
            //Structure the request
            $resp = $client->post($urlCrear,[
              'headers' => $headers,
              'json' => $data,
            ]);
            
            //dd($res);
            return redirect()->route('aula.all');
          }

          public function crearConTipoAulas(){
            $url = 'localhost:8090/api/tipoaulas/todos';
            $client = new Client();

            $res = $client->get($url);

            $data = json_decode($res->getBody()->getContents(), true);
            //RECOGER EDIFICIOS
            $url2 = 'localhost:8090/api/edificios/todos';
            $client2 = new Client();

            $res2 = $client2->get($url2);

            $edificios = json_decode($res2->getBody()->getContents(), true);

            return view('forms.aulaForm', compact('data', 'edificios'));
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
    $url = 'localhost:8090/api/tipoaulas/todos';
            $client = new Client();

            $res = $client->get($url);

            $aulas = json_decode($res->getBody()->getContents(), true);
            //RECOGER EDIFICIOS
            $url2 = 'localhost:8090/api/edificios/todos';
            $client2 = new Client();

            $res2 = $client2->get($url2);

            $edificios = json_decode($res2->getBody()->getContents(), true);

    $client = new Client();
    
    $urlBase = 'localhost:8090/api/aulas/obtener';
    $reqURL = "{$urlBase}/{$id}";

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.aulaForm', compact('data','id', 'aulas', 'edificios'));
}
 
   public function actualizar(Request $req, $id)
   {
    $url = "localhost:8090/api/tipoaulas/obtener/{$req->input('tipoAula')}";
    $client1 = new Client();

    $res = $client1->get($url);

    $aulas = json_decode($res->getBody()->getContents(), true);
    //RECOGER EDIFICIOS
    $url2 = "localhost:8090/api/edificios/obtener/{$req->input('codigoEdificio')}";
    $client2 = new Client();
    
    $res2 = $client2->get($url2);

    $edificios = json_decode($res2->getBody()->getContents(), true);
    //Prepare the request elements
    $data = [
      'edificio' => [
        'codigoEdificio' => $edificios['codigoEdificio'],
        'nombre' => $edificios['nombre'],
        'cantidadAulas' => $edificios['cantidadAulas'],
      ],
      'tipoAula' => [
        'idTipoAula' => $aulas['idTipoAula'],
        'descripcion' => $aulas['descripcion'],
      ],
      'capacidad' => $req->input('capacidad'),
    ];
    //dd($data);

     $urlBase = 'localhost:8090/api/aulas/actualizar';
     $reqURL = "{$urlBase}/{$id}";
 
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
 
     return redirect()->route('aula.all');
    }
}
