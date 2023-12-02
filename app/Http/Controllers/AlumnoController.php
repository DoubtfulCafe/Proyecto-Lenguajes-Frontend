<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function nuevo(Request $req) {
        $nombre = $req->input('nombre');
        $apellido = $req->input('apellido');
        error_log($req);
  
        error_log($nombre);
        error_log($apellido); 
      }
}
