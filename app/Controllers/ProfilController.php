<?php

namespace App\Controllers;

class ProfilController extends BaseController
{
    public function index(): string
    {
        return view('a_profile');
    }
}