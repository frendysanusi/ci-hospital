<?php

namespace App\Controllers;

class LandDokterController extends BaseController
{
    public function index(): string
    {
        return view('d_home');
    }
}