<?php

namespace App\Controllers;


class AdminController extends BaseController
{
    public function index(): string
    {
        return view('a_home');
    }

    public function patients(): string
    {

        return view('a_patients');
    }
    public function patientsid(): string
    {
        return view('a_patients_id');
    }
    public function transactions(): string
    {
        return view('a_transactions');
    }
    public function profile(): string
    {
        return view('a_profile');
    }
}