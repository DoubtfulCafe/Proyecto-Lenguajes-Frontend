<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function nuevo(Request $req) {
        $codigo = $req->input('codigo');
        $tipoAula = $req->input('tipoAula');
        $capacidad = $req->input('capacidad');
        error_log($req);
  
        error_log($codigo);
        error_log($tipoAula); 
        error_log($capacidad); 
      }
}
