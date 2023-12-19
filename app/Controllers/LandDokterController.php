<?php

namespace App\Controllers;

class LandDokterController extends BaseController
{
    public function index()
    {
        $client = \Config\Services::curlrequest();
        $url = 'http://localhost:8080/api/recommendSupplement';
        $res = $client->request('GET', $url);
        $body = $res->getBody();
        $body = json_decode($body, true);

        $recommendObat = $body['data'];

        return view('d_home', compact('recommendObat'));
    }
}