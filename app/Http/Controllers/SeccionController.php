<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SeccionController extends Controller
{
    public function listar(){
        $url = 'localhost:8090/api/secciones';
        $client = new Client();

        $res = $client->get($url);

        $data = json_decode($res->getBody()->getContents(), true);

        return view('seccionTabla', compact('data'));
   }
}
