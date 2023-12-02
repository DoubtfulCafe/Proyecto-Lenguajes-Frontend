<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function nuevo(Request $req) {
      $nombre = $req->input('nombre');
      $tipoAula = $req->input('tipoAula');
      $requisito = $req->input('requisito');
      $secciones = $req->input('secciones');
      error_log($req);

      error_log($nombre);
      error_log($tipoAula);
      error_log($requisito);
      error_log(implode(',', $secciones));
       
    }
}
