<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AsignaturaController extends Controller
{
  public function nuevo(Request $req)
  {
    //Prepare the request elements
    $data = [
      'codigoAsignatura' => $req->input('codigoAsignatura'),
      'nombreAsignatura' => $req->input('nombre'),
      'tipoAula' => $req->input('tipoAula'),
      'asignaturaRequisito' => $req->input('requisito'),
      'seccion' => $req->input('secciones'),
    ];
    $client = new Client();
    $url = 'localhost:8090/api/asignaturas/guardar';
    $headers = [
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
    ];
    $data['seccion'] = implode('*',$data['seccion']);
    //dd($data);

    //Structure the request
    $res = $client->post($url, [
      'headers' => $headers,
      'json' => $data,
    ]);

    return redirect()->route('asignatura.all');
  }

  public function listar()
  {
    $url = 'localhost:8090/api/asignaturas/todos';
    $client = new Client();

    $res = $client->get($url);

    $data = json_decode($res->getBody()->getContents(), true);
    return view('tables.asignaturaTabla', compact('data'));
  } 
 
  public function eliminar($id)
  {
    $client = new Client();

    $reqURL = "localhost:8090/api/asignaturas/eliminar/{$id}";
    $request = $client->delete($reqURL);
    return redirect()->route('asignatura.all');

  }

  public function crearConTipoAulas(){
    $url = 'localhost:8090/api/tipoaulas/todos';
    $client = new Client();

    $res = $client->get($url);

    $data = json_decode($res->getBody()->getContents(), true);

    return view('forms.asignaturaForm', compact('data'));
  }
  
  public function editar($id){
    $client = new Client();
    
    $urlBase = 'localhost:8090/api/asignaturas/obtener';
    $reqURL = '{$urlBase}/{$id}';

    $req = $client->get($reqURL);

    $data = json_decode($req->getBody(), true);

    return view('updateForms.asignaturaForm', compact('data','id'));
}

  public function actualizar(Request $req, $id)
  {
    $client = new Client();

    $urlBase = 'localhost:8090/api/asignaturas/actualizar';
    $reqURL = '{$urlBase}/{$id}';

    $data = [
      'nombre' => $req->input('nombre'),
      'tipoAula' => $req->input('tipoAula'),
      'requisito' => $req->input('requisito'),
      'secciones' => $req->input('secciones'),
    ];
  
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
