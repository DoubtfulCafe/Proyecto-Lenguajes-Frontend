<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EdificioController extends Controller
{
  public function nuevo(Request $req)
  {
    //Prepare the request elements
    $data = [
      'codigoEdificio' => $req->input('codigoEdificio'),
      'nombre' => $req->input('nombre'),
      'cantidadAulas' => $req->input('cantidad'),
    ];
    $client = new Client();
    $url = 'localhost:8090/api/edificios/guardar';
    $headers = [
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
    ];

    //Structure the request
    $res = $client->post($url, [
      'headers' => $headers,
      'json' => $data,
    ]);

    return redirect()->route('edificio.all');
  }
  public function listar()
  {
    $url = 'localhost:8090/api/edificios/todos';
    $client = new Client();

    $res = $client->get($url);

    $data = json_decode($res->getBody()->getContents(), true);

    return view('tables.edificioTabla', compact('data'));
  }
  public function eliminar($id)
  {
    $client = new Client(); 

    $urlBase = 'localhost:8090/api/edificios/eliminar';
    $reqURL = "{$urlBase}/{$id}";
    $request = $client->delete($reqURL);
    return redirect()->route('edificio.all');

  }

  public function editar($id){ 
    $client = new Client();
    
    $urlBase = 'localhost:8090/api/edificios/obtener';
    $reqURL = "{$urlBase}/{$id}";

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.edificioForm', compact('data','id'));
}

  public function actualizar(Request $req, $id)
  {
    $client = new Client();

    $urlBase = 'localhost:8090/api/edificios/actualizar';
    $reqURL = "{$urlBase}/{$id}";

    $data = [
      'nombre' => $req->input('nombre'),
      'cantidadAulas' => $req->input('cantidad'),
    ];
    $client = new Client();
    $headers = [
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
    ];

    //Structure the request
    $res = $client->put($reqURL, [
      'headers' => $headers,
      'json' => $data,
    ]);

    return redirect()->route('edificio.all');
  }
}
