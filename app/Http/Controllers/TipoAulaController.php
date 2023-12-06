<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TipoAulaController extends Controller
{
  public function nuevo(Request $req)
  {
    //Prepare the request elements
    $data = [
      'idTipoAula' => $req->input('codigo'),
      'descripcion' => $req->input('descripcion'),
    ];
    $client = new Client();
    $url = 'localhost:8090/api/tipoaulas/guardar';
    $headers = [
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
    ];

    //Structure the request
    $res = $client->post($url, [
      'headers' => $headers,
      'json' => $data,
    ]);

    return redirect()->route('tipoAula.all');
  }

  public function listar()
  {
    $url = 'localhost:8090/api/tipoaulas/todos';
    $client = new Client();

    $res = $client->get($url);

    $data = json_decode($res->getBody()->getContents(), true);

    return view('tables.tipoAulaTabla', compact('data'));
  }

  public function editar($id){
    $client = new Client();
    
    $urlBase = 'localhost:8090/api/tipoaulas/obtener';
    $reqURL = "{$urlBase}/{$id}";

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.tipoAulaForm', compact('data','id'));
}

  public function eliminar($id)
  {
    $client = new Client();

    $urlBase = "localhost:8090/api/tipoaulas/eliminar";
    $reqURL = "{$urlBase}/{$id}";
    $request = $client->delete($reqURL);
   return redirect()->route('tipoAula.all');
  }

  public function actualizar(Request $req, $id)
  {
    $client = new Client();

    $urlBase = "localhost:8090/api/tipoaulas/actualizar";
    $reqURL = "{$urlBase}/{$id}";

    $data = [
      'descripcion' => $req->input('descripcion'),
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

    return redirect()->route('tipoAula.all');
  }
}
