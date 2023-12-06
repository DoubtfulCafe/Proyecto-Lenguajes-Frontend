<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public function conteo(){
        //ALUMNOS
        $url = 'localhost:8090/api/alumnos/todos';
        $client = new Client();

        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);
        $alumnoCount = count($data);
        
        //Edificios
        $url = 'localhost:8090/api/edificios/todos';
        
        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);
        $edificioCount = count($data);
        
        //Aulas
        $url = 'localhost:8090/api/aulas/todos';
        
        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);
        $aulaCount = count($data);

        //Aulas
        $url = 'localhost:8090/api/secciones/todos';
                
        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);
        $seccionCount = count($data);

        return view('index', compact('alumnoCount','edificioCount','aulaCount','seccionCount'));
    }
}
