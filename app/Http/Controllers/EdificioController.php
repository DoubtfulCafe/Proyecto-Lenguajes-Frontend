<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public function nuevo(Request $req) {
        $nombre = $req->input('nombre');
        $cantidad = $req->input('cantidad');
        $aulas = $req->input('aulas');
        error_log($req);
  
        error_log($nombre);
        error_log($cantidad); 
        error_log(implode(',', $aulas)); 
      }
}
